<?php
/*
배열 선언
$array1[] = "one";
$array2 = array();
$array3 = [];
// 연결자를 통해서 배열 선언
// explode(연결자,문자열);
$array4 = explode("-","서울-대전-대구-부산");
*/
$fruits = array('apple', 'banana', 'strawberry');
echo $fruits[0] . "<br>";
echo $fruits[1] . "<br>";

/*
배열 전체 수
count($배열변수명)
*/
echo count($fruits) . "<br>";

/*
배열 추가
array_push($배열명, 값1,값2..);
*/
array_push($fruits, 'kiwi', 'mango');

/*
배열의 구조 확인
var_dump($배열);
*/
echo "<pre>";
echo var_dump($fruits) . "<br>";
echo "</pre>";

/*
배열의 값들을 특정 구분자를 사용하여 문자열로 변환해 주는 함수
implode(연결자,배열)
결과 : apple,banana,strawberry,kiwi,mango
*/
echo implode(",", $fruits) . "<br>" . "<br>";;

/*
특정 구분자로 구분되어 있는 문자열을 구분자를 기준으로 나누어 배열로 변환해 주는 함수
explode(연결자,변수);
*/
$str = "name1,name2,name3";
$arr = explode(",", $str);

echo print_r($arr) . "<br>";

/*
특정 범위의 수를 배열로 만들기
range(시작하는 수, 끝나는 수, //간격);
*/

$numbers = range(1, 10, 3);
echo "<pre>";
echo var_dump($numbers); //1,4,7,10
echo "</pre>";
echo "<br>";

/*
형변환
변수 = (데이터형)값 ;
*/

$str2 = "123문자열";
$str2 = (int)$str2;
echo gettype($str2)."<br>"; // 123

/*
배열 타입 확인
gettype($변수명)
*/

$result = true;
echo " \$result 는 ".gettype($result);
echo "<br>";