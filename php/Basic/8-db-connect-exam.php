<?php

$host = "localhost";
$user = "root";
$pw = "1111";
$dbName ="phpboard";

$dbConnect = new mysqli($host,$user,$pw,$dbName);
$dbConnect->set_charset("utf8");

if(mysqli_connect_errno()){
    echo "db 접속 실패"."<br>";
    echo mysqli_connect_error();
}else{
    echo "db 접속 성공!"."<br>";
}