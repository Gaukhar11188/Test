<?php

class Person{
   private $name;
   private $address;

   public function __construct($name, $address){
    $this->name = $name;
    $this->address = $address;
   }

   public function Person($name, $address){
    return "Name: ".$this->name." Address: ".$this->address."</br>";
   }

   public function getName(){
    return $this->name;
   }

   public function getAddress(){
    return $this->address;
   }

   public function setAddress($address){
    $this->address = $address;
   }

   public function __toString(){
    echo "Name = ".$this->name."Address = ".$this->address."</br>";
   }
}

class Student extends Person{
    private $program;
    private $year;
    private $fee;


    public function __construct($name, $address, $program, $year, $fee){
        parent::__construct($name, $address);
        $this->program = $program;
        $this->year = $year;
        $this->fee = $fee;
    }

    public function Student($name, $address, ){
        return "Name: ".$this->name." Address: ".$this->address."</br>";
       }
    
}

class Dog extends Animal{
    public $nick;
    public $color;

    public function __construct($name, $nick, $color){
        parent::__construct($name);
        $this->nick = $nick;
        $this->color = $color;
    }

    public function voice(){
        echo "says av-av";
    }

    public function eats(){
        echo "eats bones";
    }   
}

class Pig extends Animal{
    public $nick;
    public $color;

    public function __construct($name, $nick, $color){
        parent::__construct($name);
        $this->nick = $nick;
        $this->color = $color;
    }

    public function voice(){
        echo "says hryu-hryu";
    }

    public function eats(){
        echo "eats zheludi";
    }   
}

$animal1 = new Cat("Vasilii", "Vas'ka", "white");
$animal2 = new Dog("Fedor", "Dyadya fedor", "black");
$animal3 = new Pig("Stepan", "Stepashka", "black");

echo "Cat  with name - ".$animal1->name." with nick - ".$animal1->nick." with color - ".$animal1->color." ";
$animal1->voice();
echo "</br>";

echo "Dog with name - ".$animal2->name." with nick - ".$animal2->nick." with color - ".$animal2->color." ";
$animal2->voice();
echo "</br>";

echo "Pig with name - ".$animal3->name." with nick - ".$animal3->nick." with color - ".$animal3->color." ";
$animal3->voice();
echo "</br>";

?>