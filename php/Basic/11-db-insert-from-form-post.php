<?php
include $_SERVER['DOCUMENT_ROOT'].'/php/Basic/8-db-connect-exam.php';

$uId = $_POST['userId'];
$uName = $_POST['userName'];
$uPw = $_POST['userPw'];
$uPhone = $_POST['userPhone'];
$uEmail = $_POST['userEmail'];
$uBirthDay = $_POST['birthYear'].'-'.$_POST['birthMonth'].'-'.$_POST['birthDay'];
$uGender = $_POST['userGender'];

$sql = "INSERT INTO Member (userId, name, password,";
$sql .= " phone, email, birthDay, gender, regDate)";
$sql .= "VALUES ('{$uId}','{$uName}','{$uPw}','{$uPhone}',";
$sql .= "'{$uEmail}','{$uBirthDay}','{$uGender}',NOW())";

$result = $dbConnect->query($sql);

if($result) {
    $sql = "SELECT userId, name FROM Member";
    $result = $dbConnect->query($sql);
    $dataCount = $result->num_rows;

    for($i = 0; $i < $dataCount; $i++){
        $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
        echo "아이디 : ".$memberInfo['userId'];
        echo "<br>";
        echo "이름 : ".$memberInfo['name'];
        echo "<hr>";
    }
} else {
    echo "입력 실패";
}