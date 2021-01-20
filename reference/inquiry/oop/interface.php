<?php

interface fillable{
    public function fill();
}
interface startable{
    public function start();
}

class ElectricCar implements fillable, startable {
    public function start(){
        return "Please press a switch and you have started";
    }
    public function fill(){
        return "you have to find chargin station";
    }
}

class PetrolCar implements startable, fillable {
    public function start(){
        return "After key in you have to press self start";
    }
    public function fill(){
        return "You have to find petrol pump";
    }
}

class CNGCar implements startable, fillable{
    public function start(){
        return "After key in you have to press self start";
    }
    public function fill(){
        return "You have to find CNG Pump";
    }
}
class mobile implements fillable{
    public function fill()
    {
        // TODO: Implement fill() method.
    }
}

if($_POST['modal'] == 'electric'){
    $car = new ElectricCar;
}
elseif($_POST['modal'] == 'petrol') {
    $car = new PetrolCar;
}
elseif($_POST['modal'] == 'cng'){
    $car = new CNGCar();
}
echo "Start Method: " . $car->start();
echo '<br>';
echo "Fill: " . $car->fill();

//abstract class Car{
//    abstract public function start();
//    abstract public function fill();
//    public function run(){
//        return "All car run sameway";
//    }
//}
//class ElectricCar extends Car {
//    public function start(){
//        return "Please press a switch and you have started";
//    }
//    public function fill(){
//        return "you have to find chargin station";
//    }
//}
//
//class PetrolCar extends Car {
//    public function start(){
//        return "After key in you have to press self start";
//    }
//    public function fill(){
//        return "You have to find petrol pump";
//    }
//}
//
//class CNGCar extends Car{
//    public function start(){
//        return "After key in you have to press self start";
//    }
//    public function fill(){
//        return "You have to find CNG Pump";
//    }
//}

//if($_POST['modal'] == 'electric'){
//    $car = new ElectricCar;
//}
//elseif($_POST['modal'] == 'petrol') {
//    $car = new PetrolCar;
//}
//elseif($_POST['modal'] == 'cng'){
//    $car = new CNGCar();
//}
//echo "Start Method: " . $car->start();
//echo '<br>';
//echo "Fill: " . $car->fill();
//echo '<br>';
//echo "Run: " . $car->run();
?>