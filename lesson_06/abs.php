<?php

abstract class Animal{
   public $name;

   public function __construct($name){
    $this->name = $name;
   }

   public abstract function voice();
   public abstract function eats();
}

class Cat extends Animal{
    public $nick;
    public $color;

    public function __construct($name, $nick, $color){
        parent::__construct($name);
        $this->nick = $nick;
        $this->color = $color;
    }

    public function voice(){
        echo "says meow";
    }

    public function eats(){
        echo "eats milk";
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