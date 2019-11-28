<?php
include $_SERVER['DOCUMENT_ROOT'] . '/php/Board/common/session.php';
include $_SERVER['DOCUMENT_ROOT'] .'/php/Board/common/checkSession.php';
include $_SERVER['DOCUMENT_ROOT'] . '/php/Board/common/db-connection.php';

for($i = 1; $i <= 165; $i++){
    $time = time();
    $sql = "INSERT INTO board (memberId, title, contents, regDate) ";
    $sql .= "VALUES (1, '{$i}번째 제목', '{$i}번째 내용', {$time})";
    $result = $dbConnect->query($sql);
    if($result){
        echo "{$i}번째 데이터 입력완료";
    }else{
        echo "{$i}번째 데이터 입력실패";
    }
    echo '<br>';
}
?>