<?php

class Cat{

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
            echo "The Cat's new name is " . $this->name . PHP_EOL;
        } else {
            echo "The Cat cannot be named: " . $name . PHP_EOL;
        }


    }

    public function speak(){
        $this->counter++;
        
        if($this->counter % 5 == 0){
            $this->age++;
            echo "Age: " . $this->age . PHP_EOL;
        }else{
            echo "meow " . PHP_EOL;
            #echo $this->counter . PHP_EOL;
        }
    }

}

$co = new Cat;

$co->setname('Fred');

$x=0;
while($x<=21){
    $co->speak();
    $x++;
}





?>