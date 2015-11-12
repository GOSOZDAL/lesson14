<?php
trait Cartrait{
    public function getWheels(){
        return $this->Wheels;

    }

//bnm,.

}
class  Car{
    use Cartrait;
    public $wheels=4;

}
$car =new Car();
echo $car->getWheels();
