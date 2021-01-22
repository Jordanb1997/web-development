<?php
class Something {
    public function setX($v) {
        $this -> x=$v;
    }
    public function getX() {
        return $this ->x;
    }
}

class Another extends Something {
    public $y;
    
    public function setY($v) {
        $this->y = $v;
    }
    
    public function getY() {
        return $this ->y;
    }
}

$obj2 = new Another;
$obj2->setX(6);
$obj2->setY(7);

$valX=$obj2->getX();
$valY=$obj2->getY();
echo $valX."<br>";
echo $valY;
?>