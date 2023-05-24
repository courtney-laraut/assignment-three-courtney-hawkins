<?php
// Start the session
session_start();

$_SESSION['title'] = $_POST['titles'];
$_SESSION['f_name'] = $_POST['fName'];
$_SESSION['l_name'] = $_POST['lName'];
$_SESSION['role'] = $_POST['roles'];
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
    $role = $_POST["roles"];
?>

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

<!-- Welcome Message Per Role -->
<div class="welcome">
<h2 id="welcome">Welcome, <?php echo $role; ?></h2>
<p id="optionsHead">Here are your options:</p>



<!-- Links Per Role -->


<p id="options">
<?php 
    if ($role == 'Admin') {
        echo "<a href=\"isnt-working.php\">My computer isn't working</a><br><br><a href=\"new-account.php\">Create a new account</a>";
    } elseif ($role == 'Manager') {
        echo "<a href=\"isnt-working.php\">My computer isn't working</a><br><br><a href=\"lost-password.php\">Having trouble signing in</a>";
    } elseif ($role == 'CEO') {
        echo "<a href=\"isnt-working.php\">My computer isn't working</a><br><br><a href=\"need-help.php\">Contact helpline.</a>";
    } else {
        echo "Error Message";
    }
?>
</p>
</div>


<!-- Footer Layout -->

<?php require "pageAssets/footer.php"; ?>
