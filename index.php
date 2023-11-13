<?php

require_once 'database.php';
require_once 'product.php';

echo " <h1>min E-Handel</h1>";


$connection = getConnection();
$product = getProduct($connection,"f-52");

if($product != null){
$product -> print();
}


