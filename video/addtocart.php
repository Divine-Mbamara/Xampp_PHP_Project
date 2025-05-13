<?php

$name = $_POST["title"];
$picture = $_POST["picture"];
$color = $_POST["color"];
$price = $_POST["price"];

$product = [$name, $picture, $color, $price];

if(!isset($_COOKIE["cart"])) {
    setcookie("cart", json_encode($product), time() * 30, "/");
}

$cart = json_decode($_COOKIE["cart"]);
$cart[] = $product;

setcookie("cart", json_encode($cart), time() * 30, "/");

header("Location: cart.php");

?>