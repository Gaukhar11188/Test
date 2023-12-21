<?php
class Product{
    public $name;
    public $price;
    public $description;
    public $brand;

    public function __construct($name, $price, $description, $brand){
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->brand = $brand;
    }

    public function getProduct(){
       return "Name: ".$this->name.", Price: $".$this->price.", Description: ".$this->description.", Brand: ".$this->brand.",</br>";
    }
}

class Phone extends Product{
    public $cpu;
    public $ram;
    public $countSim;
    public $hdd;
    public $os;

    public function __construct($name, $price, $description, $brand, $cpu, $ram, $countSim, $hdd, $os){
        parent::__construct($name, $price, $description, $brand);
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->countSim = $countSim;
        $this->hdd = $hdd;
        $this->os = $os;
    }

    public function getProduct(){
        echo "<strong>".parent::getProduct()."CPU: ".$this->cpu.", RAM: ".$this->ram."GB, CountSim: ".$this->countSim."GB, HDD: ".$this->hdd."GB, OS: ".$this->os.".</strong></br></br>";
    }
}

class Monitor extends Product{
    public $diagonal;
    public $frequency;
    public $ports;

    public function __construct($name, $price, $description, $brand, $diagonal, $frequency, $ports){
        parent::__construct($name, $price, $description, $brand);
        $this->diagonal = $diagonal;
        $this->frequency = $frequency;
        $this->ports = $ports;
    }

    public function getProduct() {
        return "<strong>".parent::getProduct()."Diagonal: ".$this->diagonal."inches, Frequency: ".$this->frequency."Hz, Ports: ".$this->ports.".</strong></br></br>";
    }

    
}

?>