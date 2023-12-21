<?php

class User{
private $name;
private $password;

public function __construct($name, $password){
    echo "New user added";
    $this->name = $name;
    $this->password = $password;
}

public function access(){
    return "default";
}

public function getName(){
    return $this->name;
}

public function setName($name){
    $this->name = $name;
}

}

class Admin extends User implements Clonale{
    private $access_level;

    public function __construct($name, $password, $access_level){
        parent::__construct($name, $password);
        $this->access_level = $access_level;
    }

    public function access(){
        return $access_level;
    }
}

interface Ban{
    final static $pi = 3.14;
    public abstract function ban();

}

interface Clonable{

}
     


$user_1 = new User("Vasya", "psw1");
if($user_1 instanceof Clonable);

?>