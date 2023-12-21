<?php
include_once "product.php";

$phone1 = new Phone('iPhone 7', 1000, 'Phone', 'Apple', 'A9', 1, 1, 128, 'iOS');
$phone2 = new Phone('Galaxy S10', 1000, 'Phone', 'Samsung', 'Snapdeagon 860', 3, 1, 128, 'Android');
$phone3 = new Phone('Lumia 720', 350, 'Phone', 'Nokia', 'Snapdragon 300', 500, 1, 32, 'Window Phone');
$monitor1 = new Monitor('S24E650', 100, 'Monitor', 'Samsung', 21, 60, [VGA, HDMI, DisplayPort]);
$monitor2 = new Monitor('Apple Cinema Display', 10000, 'Monitor', 'Apple', 24, 144, [HDMI, DisplayPort]);

$products = array($phone1, $phone2, $phone3, $monitor1, $monitor2);

echo "<h3>Product Info:</h3>";
foreach ($products as $product){
    echo $product->getProduct();
}

?>