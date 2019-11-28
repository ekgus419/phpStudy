<?php
class pen {
    public $color = "blue";
    public $bold;
    public $price;

    //생성자
    function __construct($color){
        echo "파라미터펜 색 : {$this->color}"."<br>";
        echo "아규먼트펜 색 : {$color}"."<br>";
    }

    function write($contents){
        echo "${contents}을 쓰다.";
    }

    function draw($contents){
        echo "${contents}를 그리다.";
    }

    function __destruct()
    {
        echo "펜 객체 소멸";
    }
}

//$pen = new Pen();
//$pen->write("책");
//$pen->draw('그림');
//$pen = new pen("black");

class a {
    function hello(){
        echo "Hello World!"."<br>";
    }
}

class b extends a{
}

$b = new b();
$b->hello();
