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

<!-- Instructions Text -->

<div class="welcome">
<h2 id="welcome">Account Creation</h2>
<p id="loginInstruct">Enter your email in the field below to receive account setup instructions.</p>

</div>



<!-- Form for Account Creation -->
<div id="divform">
<form action="send-email.php" method="post">
    <label for="email">Enter your email:</label>
    <input type="email" id="email" name="newEmail" required maxlength=25>
    <input type="submit" value="submit" id="submit">
</form>
</div>

<!-- Footer Layout -->

<?php include "pageAssets/footer.php"; ?>
