<?php
/*
foreach($배열변수 as 배열의 값을 대입할 변수){
// code
}
*/

$member = ["name1", "name2", "name3"];
foreach ($member as $name) {
    echo $name . "<br>";
}
echo '<br>';

$memberList2['one'] = ['name' => 'name1', 'id' => 'id1'];
$memberList2['two'] = ['name' => 'name2', 'id' => 'id2'];
$memberList2['three'] = ['name' => 'name3', 'id' => 'id3'];
$memberList2['four'] = ['name' => 'name4', 'id' => 'id4'];
/*
array(4) {
  ["one"]=>
          array(2) {
                ["name"]=>string(5) "name1"
                ["id"]=>s tring(3) "id1"
          }
..
}
*/
foreach ($memberList2 as $ml) {
    echo "이름 : " . $ml['name'];
    echo '<br>';
    echo " 아이디 : " . $ml['id'];
    echo '<br><br>';
}

echo "<pre>";
echo var_dump($memberList2);
echo "</pre>";

$arr = array(
    array("apple", "korea", 1000),
    array("banana", "philippines", 2000),
    array("orange", "us", 1500)
);

foreach ($arr as $arr1) {
    foreach ($arr1 as $arr2) {
//        echo $arr2 . "<br>";
    }

}


$arr2 = array(
    array(
        array("apple", "korea", 1000),
        array("banana", "philippines", 2000),
        array("orange", "us", 1500)
    ),
    array(
        array("carrot", "vietnam", 500),
        array("cucumber", "korea", 1000),
        array("pumpkin", "china", 2000)
    )
);

//echo "<pre>";
//echo var_dump($arr2);
//echo "</pre>";

for ($i = 0; $i < count($arr2); $i++) {
    for ($j = 0; $j < count($arr2[$i]); $j++) {
        for ($k = 0; $k < count($arr2[$i][$j]); $k++) {
            echo $arr2[$i][$j][$k] . ",";
        }
        echo "<br>";
    }
}

/*for ($i = 0; $i < count($arr2); $i++) {
    for ($j = 0; $j < count($arr2[$i]); $j++) {
        for ($k = 0; $k < count($arr2[$i][$j]); $k++) {
            echo $arr2[$i][$j][$k] . ", ";
        }
        echo "<br>";
    }
    echo "<br>";
}*/



//
//for($layer = 0; $layer < count($arr2); $layer++){
//    for($row = 0; $row < count($arr2[$layer]); $row++) {
//        for($column = 0; $column < 3; $column++){
//            echo $arr2[$layer][$row][$column].", ";
//        }
//        echo "<br>";
//    }
//    echo "<br>";
//}