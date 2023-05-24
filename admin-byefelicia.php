<?php include "pageAssets/connection.php" ?>

<?php

// echo var_dump($_POST);

$id=$_POST["id"];

$sql = "DELETE FROM `alladventures` WHERE `id`='$id'";

if ($conn->query($sql) === TRUE) {
  $dataSubmit = "Trip has been deleted from the database successfully.";
//   echo "New record created successfully";
} else {
  $dataSubmit = "Data could not be submitted to the server, please return to the previous page and try again.";
//   echo "Error: " . $sql . "<br>" . $conn->error;
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Halifax Canoe and Kayak</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <style> <?php require "scriptsAndStyles/main.css"; ?></style>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <script src='scriptsAndStyles/jquery-3.6.3.js'></script>
    <script src="scriptsAndStyles/home.js"></script>
</head>

<body>

<!-- Header Layout -->

<?php require "pageAssets/header.php" ?>


<!-- Navigation Bar -->

<?php require "pageAssets/nav-bar.php" ?>

<!-- Confirmation Text -->

<div id="add-trip-div">

    <h3>Admin - Confirm</h3>
    <hr>
    <p> <?php echo $dataSubmit; ?></P>
    <br>
    <a class="all-link" href="all-adventures.php">View all uploaded trips here >></a>
    <p> 


</div>


<!-- Footer -->

<?php require "pageAssets/footer.php" ?>









<!-- Form Validation Stuff -->


