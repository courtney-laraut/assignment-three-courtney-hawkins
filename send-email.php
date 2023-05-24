<?php
// Start the session
session_start();

if (isset($_POST["newEmail"])) {
    $_SESSION["new_account"] = $_POST["newEmail"];
} else {
    $_SESSION["lost_account"] = $_POST["lostEmail"];
}

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

<?php 
// $email = $_POST["email"];
?>

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

<!-- Message Depending on Email Submission Type -->
<div class="welcome">
<?php 
if (array_key_exists("newEmail", $_POST)) {
    echo "<h2 id='welcome'>Thank you.</h2><p id='loginInstruct'> Account creation details will be emailed to you shortly.</p>";
} elseif (array_key_exists("lostEmail", $_POST)) {
    echo "<h2 id='welcome'>Thank you.</h2> <p id='loginInstruct'>If your email address matches an account in our database, we will send instructions on how to set a new password. </p>";
} else {
    echo "Error Message";
}
 ?>
</div>


<!-- Footer Layout -->

<?php include "pageAssets/footer.php"; ?>
