<?php
// 배열 연습(Select문)
$furniture = array("책상","의자","침대","책장","수납장");
$html = "<form action ='test' metho='POST' >";
$html .= "<select name='가구'>";
/*for($i = 0; $i<count($furnitures); $i++){
    $html .= "<option value='{$furnitures[$i]}'>{$furnitures[$i]}</option>";
}*/
foreach($furniture as $name){
    $html .= "<option value='{$name}'>{$name}</option>";
}
$html .= "</select>";
$html .= "<input type='submit' />";
$html .= "</form>";

// 배열 연습 2차원 배열
// 배열 선언 :
$furniture1 = array(
                    "책상" => "desk",
                    "의자" => "chair",
                    "침대" => "bed",
                    "책장" => "bookshelf",
                    "수납장" => "cabinet"
              );

// key, val 추출
$html2 = "";
foreach($furniture1 as $key => $val){
    // key 추출
    $html2 .= $key."<br>";
    // val 추출
    $html2 .= $val."<br>";
}

echo $html;
echo $html2;