<?php
// Start the session
session_start();


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

<!-- Message for CEO Helpline -->
<div class="welcome">
    <h2 id="welcome">If you require assistance from our helpline, please call us at:</h2>
    <br>
    <p id="loginInstruct">555-123-4567</p>
    <p id="loginInstruct">Our offices are open Mon - Fri, 9:00 - 17:00 </p>
</div>

<!-- Footer Layout -->

<?php include "pageAssets/footer.php"; ?>
