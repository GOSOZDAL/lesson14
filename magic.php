<?php
trait Cartrait{
    public function getWheels(){
        return $this->Wheels;

    }



}
else  Car{
    use Cartrait;
    public $wheels=4;

}
$car =new Car();
echo $car->getWheels();
