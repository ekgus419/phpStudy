<?php

include $_SERVER['DOCUMENT_ROOT'] . '/php/Basic/8-db-connect-exam.php';

$sql = "CREATE TABLE Member(";
$sql .= "myMemberID int unsigned auto_increment comment '고객 고유 번호',";
$sql .= "userId varchar(15) not null comment '고객아이디',";
$sql .= "name varchar(10) not null comment '고객명',";
$sql .= "password varchar(30) not null comment '고객비밀번호',";
$sql .= "phone varchar(13) not null comment '고객 휴대전화 번호',";
$sql .= "email varchar(30) not null comment '고객 이메일 주소',";
$sql .= "birthDay char(10) not null comment '고객 생일',";
$sql .= "gender enum('m','w','x') default 'x' comment '고객 성별',";
$sql .= "regTime datetime not null comment '회원가입 시간',";
$sql .= "primary key(myMemberID))";
$sql .= "charset=utf8 comment='고객 정보 테이블';";

$res = $dbConnect->query($sql);

if ($res) {
    echo "테이블 생성 완료";
} else {
    echo "테이블 생성 실패";
}