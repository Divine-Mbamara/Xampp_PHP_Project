<?php 
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $province = $_POST["province"];
    $option = $_POST["choice_of_delivery"];

    $user[] = [$name, $email, $phone, $province, $option];
    if(!isset($_COOKIE["user"])) {
        setcookie("user", json_encode($user), time() * 30, "/");
    }

    header("Location: orderSuccess.php");

?>