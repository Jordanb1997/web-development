<?php
class Something {

    public $x;
    public function setX($v) {
        $this -> x=$v;
    }
    
    public function getX() {
        return $this ->x;
    }
}

$obj = new Something;

$obj -> setX(1);
$val = $obj ->getX();
echo $val."<br>";
$obj -> x=2;

$val = $obj ->x;
echo $val;
?>