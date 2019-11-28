<?php
include $_SERVER['DOCUMENT_ROOT'] . '/php/Board/common/session.php';
include $_SERVER['DOCUMENT_ROOT'] .'/php/Board/common/checkSession.php';
include $_SERVER['DOCUMENT_ROOT'] . '/php/Board/common/db-connection.php';


$title = $_POST['title'];
$contents = $_POST['contents'];

if($title != null && $title != ''){
    $title = $dbConnect->real_escape_string($title);
} else {
    echo "제목을 입력하세요.";
    echo "<a href='./writeForm.php'>작성 페이지로 이동</a>";
    exit;
}

if($contents != null && $contents != ''){
    $contents = $dbConnect->real_escape_string($contents);
} else {
    echo "내용을 입력하세요.";
    echo "<a href='./writeForm.php'>작성 페이지로 이동</a>";
    exit;
}

$memberID = $_SESSION['memberID'];

$regDate = time();

$sql = "INSERT INTO board (memberID, title, contents, regDate) ";
$sql .= "VALUES ({$memberID},'{$title}','{$contents}',{$regDate})";
$result = $dbConnect->query($sql);

if($result){
    echo "저장 완료"."<br>";
    echo "<a href='./list.php'>게시글 목록으로 이동</a>";
    exit;
} else {
    echo "저장 실패 - 관리자에게 문의"."<br>";
    echo "<a href='./list.php'>게시글 목록으로 이동</a>";
    exit;
}