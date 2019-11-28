<?php
include $_SERVER['DOCUMENT_ROOT'].'/php/Board/common/session.php';
include $_SERVER['DOCUMENT_ROOT'] . '/php/Board/common/db-connection.php';

$email = $_POST['userEmail'];
$nickName = $_POST['userNickName'];
$pw = $_POST['userPw'];
$birthYear = (int) $_POST['birthYear'];
$birthMonth = (int) $_POST['birthMonth'];
$birthDay = (int) $_POST['birthDay'];

function goSignUpPage($alert){
    echo $alert.'<br>';
    echo "<a href='./signUpForm.php'>회원가입폼으로 이동</a>";
    return;
}

//유효성 검사
//이메일 검사
if(!filter_Var($email, FILTER_VALIDATE_EMAIL)){
    goSignUpPage('올바른 이메일이 아닙니다.');
    exit;
}

//한글로 구성되어있는지 정규식 검사
$nickNameRegPattern = '/^[가-힣]{1,}$/';
if (!preg_match($nickNameRegPattern, $nickName, $matches)) {
    goSignUpPage('닉네임은 한글로만 입력해 주세요.');
    exit;
}

//비밀번호 검사
if($pw == null || $pw == ''){
    goSignUpPage('비밀번호를 입력해 주세요.');
    exit;
}

// 임의로 더하는값 , 비밀번호
$pw = sha1('php200'.$pw);

//생년 검사
if($birthYear == 0) {
    goSignUpPage('생년을 정확히 입력해 주세요.');
    exit;
}

//생월 검사
if($birthMonth == 0) {
    goSignUpPage('생월을 정확히 입력해 주세요.');
    exit;
}

//생일 검사
if($birthDay == 0) {
    goSignUpPage('생일을 정확히 입력해 주세요.');
    exit;
}

$birth = $birthYear.'-'.$birthMonth.'-'.$birthDay;

//이메일 중복 검사
$isEmailCheck = false;

$sql = "SELECT email FROM member WHERE email = '{$email}'";
$result = $dbConnect->query($sql);

if( $result ) {
    $count = $result->num_rows;
    if($count == 0){
        $isEmailCheck = true;
    } else {
        echo "이미 존재하는 이메일 입니다. ";
        goSignUpPage();
        exit;
    }
} else {
    echo "에러발생 : 관리자 문의 요망";
    exit;
}


//닉네임 중복 검사
$isNickNameCheck = false;

$sql = "SELECT nickName FROM member WHERE nickname = '{$nickName}'";
$result = $dbConnect->query($sql);

if( $result ) {
    $count = $result->num_rows;
    if($count == 0){
        $isNickNameCheck = true;
    } else {
        goSignUpPage('이미 존재하는 닉네임 입니다.');
        exit;
    }
} else {
    echo "에러발생 : 관리자 문의 요망";
    exit;
}

if ($isEmailCheck == true && $isNickNameCheck == true) {
    $regDate = time();
    $sql = "INSERT INTO member(email, nickname, pw, birthday, regDate)";
    $sql .= "VALUES('{$email}', '{$nickName}', '{$pw}',";
    $sql .= "'{$birth}', {$regDate})";
    $result = $dbConnect->query($sql);

    if ($result) {
        $_SESSION['memberID'] = $dbConnect->insert_id;
        $_SESSION['nickName'] = $nickName;
        Header("Location:../index.php");
    } else {
        echo '회원가입 실패 - 관리자에게 문의';
        exit;
    }
} else {
    goSignUpPage('이메일 또는 닉네임이 중복값입니다.');
    exit;
}