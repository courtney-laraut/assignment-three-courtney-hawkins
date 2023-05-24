<?php
session_start();
session_destroy();
header( "refresh:5;url=admin.php" );
?>

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

<?php include "pageAssets/header.php"; ?>

<!-- Navigation Bar -->

<?php include "pageAssets/nav-bar.php"; ?>

<!-- Logout Button -->

<div class='logout'>
    <button id= logBtn onclick="document.location='logout.php'">Logout</button>
</div>

<!-- Logout Confirmation -->
<div class="welcome">
    <h2 id="welcome">You have logged out of your account. You will be redirected to the IT Support home page soon.</h2>
    <br>
    <div id="gifLoad"><img src="images/loading.gif" alt="Rotating countdown"></div>
</div>

<!-- Backup Timeout Script -->
<script>
    setTimeout(function () {
        window.location.href= 'admin.php';
    },5000);
</script>

<!-- Footer Layout -->

<?php include "pageAssets/footer.php"; ?>
