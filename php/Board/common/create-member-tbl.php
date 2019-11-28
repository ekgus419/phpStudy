<?php
include $_SERVER['DOCUMENT_ROOT'] . '/php/Basic/8-db-connect-exam.php';

$sql = "CREATE TABLE member (";
$sql .= "memberID int(10) unsigned NOT NULL AUTO_INCREMENT  comment '고객 고유 번호' ,";
$sql .= "email varchar(40) UNIQUE NOT NULL comment '고객 이메일',";
$sql .= "nickname varchar(10) NOT NULL comment '고객 닉네임',";
$sql .= "pw varchar(40) DEFAULT NULL comment '고객 비밀번호',";
$sql .= "birthday varchar(10) NOT NULL comment '고객 생일',";
$sql .= "regDate int(11) NOT NULL comment '고객 가입일',";
$sql .= "PRIMARY KEY (memberID)";
$sql .= ") CHARSET=utf8";

$res = $dbConnect->query($sql);

if ( $res ) {
    echo "테이블 생성 완료";
} else {
    echo "테이블 생성 실패";
}
?>