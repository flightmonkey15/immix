<?php

class Dog{

    private $counter;


    public function __construct(){
        $this->age = 1;
        $this->counter = 0;
        $this->name = NULL;
    }


    public function setName($name){
        
        $regex = "/^[ a-z]+$/i";
        if (preg_match($regex, $name)) {
            $this->name = $name;
            echo "The Dog's new name is " . $this->name . PHP_EOL;
        } else {
            echo "The Dog cannot be named: " . $name . PHP_EOL;
        }


    }

    public function speak(){
        $this->counter++;
        
        if($this->counter % 5 == 0){
            $this->age++;
            echo "Age: " . $this->age . PHP_EOL;
        }else{
            echo "bark " . PHP_EOL;
            #echo $this->counter . PHP_EOL;
        }
    }

}

$co = new Dog;

$co->setname('Biff');

$x=0;
while($x<=21){
    $co->speak();
    $x++;
}





?>