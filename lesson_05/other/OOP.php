<?php
class Person{
private $name;
public $surname;
protected $age;
static private $id = 0;


function __construct($name, $surname, $age){
    $this->name = $name;
    $this->surname = $surname;
    $this->age = $age;
$this->id = self::$id;
self::$id++;

}


function getName(){
    return $this->name;
}

function getSurName(){
    return $this->surname;
}


function getAge(){
    return $this->age;
}

function setName($name){
    $this->name = $name;
}

function __toString(){
    return " Name:".$this->name." Surname: ".$this->surname." Age: ".$this->age."Id: ".$this->id;
}
}

class Student extends Person{
    private $gpa;
    private $class;

    function __construct($name, $surname, $age, $gpa, $class){
       parent::__construct($name, $surname, $age);
       $this->gpa = $gpa;
       $this->class = $class;
    }

    function __toString(){
        return parent::__toString()." Gpa: ".$this->gpa." Class: ".$this->class;
    }
}

$p = new Person("G", "U", 27);
$s1 = new Student("A", "B", 27, 2.98, "IT");
$s2 = new Student("B", "B", 27, 2.98, "IT");
$s3 = new Student("C", "B", 27, 2.98, "IT");
//echo " Name: ".$p->getName()."</br>Surname: ".$p->getSurname()."</br>Age: ".$p->getAge();
echo $s1->__toString()."</br>";
echo $s2->__toString()."</br>";
echo $s3->__toString()."</br>";

?>