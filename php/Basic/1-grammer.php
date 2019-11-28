<?php
/*
php 변수 선언
선언 : $변수명 = 값;
출력 : {$변수명};
*/
$num = 1;
echo "변수 num의 값은 {$num} 입니다.";
echo "<br>";

// 문자열 안 따옴표 -> \
$str = "문자열 안 \"큰 따옴표 사용\"";
echo $str;
echo "<br>";

// 연결연산자 dot(.)
$str1 = "안녕";
$str2 = "하세요";

echo $str1 . $str2;
echo "<br>";

/*
상수 선언
define(상수명,상수값);
*/

define("My_Birth_Day", "1992/04/19");
echo "My Birth Day is " . My_Birth_Day;
echo "<br>";

/*
define 정의 후, 값 변경시 에러
define("My_Birth_Day", "2019/11/26");
echo "My Birth Day is ".My_Birth_Day;
echo "<br>";
*/

/*
대입 연산자
변수 .= : 변수의 문자열에서 다른 문자열을 붙일 때 사용
*/

$city = "서울";
$city .= "대전";
echo $city;
echo "<br>";

/*
하나의 파일을 여러곳에서 사용
require : 포함시키는 파일 경로, 파일명 문제시 오류 발생
include : 오류 X 
*/

?>