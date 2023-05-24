<!-- Session Details -->

<?php
session_start();
?>

<!-- Meta Info -->

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Halifax Canoe and Kayak</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <style> <?php require "scriptsAndStyles/main.css"; ?></style>
    <script src='scriptsAndStyles/jquery-3.6.3.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="scriptsAndStyles/home.js"></script>
</head>



<!-- Background Colour -->
<body>
<style>
    body {
        background-color: darkgray;
    }
</style>

<!-- Header Layout -->

<?php require "pageAssets/header.php"; ?>

<!-- Navigation Bar -->

<?php require "pageAssets/nav-bar.php"; ?>

<!-- Logout Button -->

<div class='logout'>
    <button id= logBtn onclick="document.location='logout.php'">Logout</button>
</div>

<!-- Login Form -->
<div class='welcome'>
<h2 id="welcome"> Welcome to Your IT Support System </h2>
<p id="loginInstruct">Please login with your credentials below.</p>
</div>

<!-- Responsive Form jQuery -->
<script>
    $(window).on('load', function(){
        var win = $(this); //this = window
    if (win.width() <= 960) {$("#divform").load("pageAssets/loginFormSmall.php"); }
    if (win.width() >= 960) {$("#divform").load("pageAssets/loginFormBig.php"); }
});

    $(window).on('resize', function(){
        var win = $(this); //this = window
        if (win.width() <= 960) {$("#divform").load("pageAssets/loginFormSmall.php"); }
        if (win.width() >= 960) {$("#divform").load("pageAssets/loginFormBig.php"); }
    });

</script>

<!-- Form Div -->

<div id="divform"> 
</div>

<!-- Footer Layout -->

<?php require "pageAssets/footer.php"; ?>

<!-- End of Page -->
</body>
</html>