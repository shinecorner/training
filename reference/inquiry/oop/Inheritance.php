<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
//
//class Animal{
//    public $food;
//    protected function eat(){
//        return "Eat diffrent way";
//    }
//    public function breath(){
//        return "Every enimal breath same way";
//    }
//    public function checkEat(){
//        return $this->eat();
//    }
//}
//
//class VegAnimal extends Animal {
//    public function eat()
//    {
////        return parent::eat();
//        return "Veg animal eat grass, leaves and other vegitables";
//    }
//    public function useForHuman()
//    {
//        return "we can have veg animal as pet";
//    }
//}
//class NonVegAnimal extends Animal {
//    public function eat()
//    {
//        return "NonVeg animal eat mit of other animal";
//    }
//    public function hunt()
//    {
//        return "Non-veg animal genrally hunt any veg animal";
//    }
//}
//
//$animal = new Animal;
//echo $animal->breath();
//
//$vegAnimal = new VegAnimal;
//echo $vegAnimal->checkEat();
//echo $vegAnimal->useForHuman();
//
//$nonVegAnimal = new NonVegAnimal;
//echo $nonVegAnimal->breath();
//echo $nonVegAnimal->hunt();


ini_set('display_errors', 1);
//error_reporting(E_ALL);
//
abstract class Animal{
    public $food;
    abstract protected function eat();
    public function breath(){
        return "Every enimal breath same way";
    }
    public function checkEat(){
        return $this->eat();
    }
    public function move(){}
}

class VegAnimal extends Animal {
    public function eat()
    {
//        return parent::eat();
        return "Veg animal eat grass, leaves and other vegitables";
    }
    public function useForHuman()
    {
        return "we can have veg animal as pet";
    }
}
class NonVegAnimal extends Animal {
    public function eat()
    {
        return "NonVeg animal eat mit of other animal";
    }
    public function hunt()
    {
        return "Non-veg animal genrally hunt any veg animal";
    }

}

//$animal = new Animal;
//echo $animal->breath();

$vegAnimal = new VegAnimal;
//echo $vegAnimal->checkEat();
echo $vegAnimal->move();
//echo $vegAnimal->useForHuman();
//
//$nonVegAnimal = new NonVegAnimal;
//echo $nonVegAnimal->breath();
//echo $nonVegAnimal->hunt();