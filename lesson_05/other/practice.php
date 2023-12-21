<?php
class Product{
    private $name;
    private $price;


function __construct($name, $price){
    $this->name = $name;
    $this->price = $price;
}

function getProduct(){
    return " Name:".$this->name." Price: ".$this->price;
}
}



$products = [];
$product = $_POST['product'];
$price = $POST['price'];
$p1 = new Product($product, $price);

if (isset($_POST["Add"]))
{
array_push($products, $p1);
echo "New product is added!";
} 


?>

