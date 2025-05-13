<?php
    setcookie("cart", "", time() - 3600, "/");
    setcookie("user", "", time() - 3600, "/");
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
    <section class="order-success">
        <h1>Your order has been placed successfully.</h1>
        <p>You will receive your order in 3-5 business days. A confirmation email with the order details has been sent to your inbox. You can track your order status in your account or via the tracking link provided.</p>
    </section>
</main>
<footer id="footer"></footer>
</body>
</html>