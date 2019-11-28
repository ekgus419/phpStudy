<?php
include $_SERVER['DOCUMENT_ROOT'] . '/php/Board/common/db-connection.php';

$sql = "CREATE TABLE board (";
$sql .= "boardId int(10) unsigned NOT NULL AUTO_INCREMENT comment '글 고유번호' ,";
$sql .= "memberId int(10) unsigned NOT NULL comment '고객 고유 번호',";
$sql .= "title varchar(50) NOT NULL comment '글 제목' ,";
$sql .= "contents longtext NOT NULL comment '글 내용' ,";
$sql .= "regDate int(10) unsigned NOT NULL comment '글 등록일' ,";
$sql .= "PRIMARY KEY (boardId)";
$sql .= ") CHARSET=utf8";

$res = $dbConnect->query($sql);

if ( $res ) {
    echo "테이블 생성 완료";
} else {
    echo "테이블 생성 실패";
}