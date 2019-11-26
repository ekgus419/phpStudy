<?php
$str = "사과2";
switch ($str){
    case "바나나":
        echo "바나나";
        break;
    case "사과":
        echo "사과";
        break;
    case "딸기":
        echo "딸기";
        break;
    default :
        echo "전부 아님";
        break;
}
echo "<br>"."<br>";

$number = 2;
switch($number){
    case ($number > 3):
        echo "3보다 크다.";
        break;
    case ($number < 3):
        echo "3보다 작다.";
        break;
}

echo "<br>"."<br>";
echo "구구단";
echo "<br>"."<br>";

for($i=2; $i<10; $i++){
    echo $i."단 "."<br>";
    for($j=1; $j<10; $j++){
        echo $i."x".$j."=".$i*$j." ";
    }
    echo "<br>";
}