<?php
class Bike {
    protected $speed = 0;
    function upSpeed(){
        $this->speed = $this->speed<1 ? 1 : $this->speed*1.2;
    }
    function downSpeed(){
        $this->speed = $this->speed<1 ? 0 : $this->speed*0.7;
    }
    function getSpeed(){
        return $this->speed;
    }
}
class Scooter extends Bike {
    private $gear = 0;
    // Override
    // function upSpeed(){
    //     parent::upSpeed();
    // }
    function chGear($gear){$this->gear = $gear;}
    function upSpeedV2(){
        $this->speed = $this->speed<1 ? 2 : $this->speed*($this->gear*1.2);
    }
}
class person {
    private $myBike;    // has-a Bike Object
    private $myScoore;
    private $myName;

    // 建構式, 建構子, 建構方法 => 物件的初始化程序
    function __construct($name){
        $this->myBike = new Bike;
        $this->myScooter = new Scooter;
        $this->myName = $name;
    }
}

$b1 = new Bike;
$b2 = new Bike;
$s1 = new Scooter;
var_dump($s1);
$s1->upSpeed();
echo '<hr>';
echo $s1->getSpeed() . '<br>';
$s1->chGear(4);
$s1->upSpeedV2();
echo $s1->getSpeed() . '<br>';
$s1->upSpeedV2();
echo $s1->getSpeed() . '<br>';
echo '<hr>';
$p1 = new Person('Brad');
var_dump($p1);





