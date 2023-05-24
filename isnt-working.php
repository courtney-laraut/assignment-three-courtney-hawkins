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

<!-- Message for Computer Not Working -->
<div class="welcome">
    <h2 id="welcome">Your Computer Isn't Working</h2>
    <p id="loginInstruct">Specialists suggest the following troubleshooting options:</p>
    <div id="gif"><img src="https://media.giphy.com/media/l4Ki2obCyAQS5WhFe/giphy.gif" alt="Michael Jordan requesting you stop and seek help in gif form"></div>
</div>


<!-- Footer Layout -->

<?php include "pageAssets/footer.php"; ?>
