<?php include "pageAssets/connection.php" ?>

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


<!-- Add Trip Form -->

<?php
$trip_id = $_GET['id'];
$sql = "SELECT * FROM alladventures WHERE id = '$trip_id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<div id="add-trip-div">

    <h3>Admin - Delete Adventure</h3>
    <hr>
    <p>Are you sure you want to delete the trip below? </P>

    <br>
    <br>
</div>
<div class="boxotext">
        <h3><?php echo "$row[heading]"?></h3>
        <p>Trip Date: <?php echo "$row[tripDate]"?></p>
        <p>Duration: <?php echo "$row[duration]"?></p>
        <br>
        <h4>Summary</h4>
        <p><?php echo "$row[summary]"?></p>
</div>
<form id="trip-add-form" action="admin-byefelicia.php" method="post">
    <table id="trip-table">
        <tr>
            <td><input type="hidden" name="id" value="<?php echo "$row[id]" ?>"><input id="submit" class="trip-delete" type="submit" value="Delete"></td>
        </tr>
    </table>
</form>





<!-- Footer -->

<?php require "pageAssets/footer.php" ?>