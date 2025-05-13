<?php
    if(isset($_COOKIE["cart"])) {
        $cart = json_decode($_COOKIE["cart"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head id="meta-data">
    <meta name="description" content="CSS Final Project">
    <title>Shop Stylish Clocks: Alarm, Wall, and Vintage Designs</title>
    <!--add CSS files-->
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <!--add jquery-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!--add JS file-->
    <script src="js/custom-js.js"></script>
    <!-- add Fontawesome -->
    <script src="https://kit.fontawesome.com/627852edbd.js" crossorigin="anonymous"></script>
</head>
<body>
<!-- Header -->
<header id="header"></header>
<main>
    <div class="cart">
        <h1>Cart</h1>
    </div>
    
    <?php 
        if(isset($_COOKIE["cart"])) {
            foreach ($cart as $item) {
                echo '
                    <section class="cart-sections">
                        <div class="cart-image">
                            <img src="' . $item[1] . '" alt="' . $item[0] . '">
                        </div>
                        <div class="cart-text">
                            <h4>Name: ' . $item[0] . '</h4>
                            <p>Color: ' . $item[2] . '</p>
                            <p>Price: ' . $item[3] . '</p>
                        </div>
                    </section>
                ';
            } 
        }   
    ?>
    <div class="checkout">
        <a href="order-summary.html" target="_self"><input type="submit" value="Checkout"></a>
    </div>
</main>
<footer id="footer"></footer>
</body>
</html>