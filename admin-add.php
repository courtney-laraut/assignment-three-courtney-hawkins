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
<div id="add-trip-div">

    <h3>Admin - Add Adventure</h3>
    <hr>
    <p>Input trip details below: </P>

    <form id="trip-add-form" action="admin-confirm.php" method="post">
    <table id="trip-table">
        <tr>
            <td><label class="trip-labels" for="heading">Heading: </label></td>
            <td><input class="trip-inputs" name="heading" type="text" maxlength=25 required></td>
        </tr>
        <tr>
            <td><label class="trip-labels" for="tripDate">Trip Date: </label></td>
            <td><input class="trip-inputs" name="tripDate" type="date" required ></td>
        </tr>
        <tr>
            <td><label class="trip-labels" for="duration">Duration: </label></td>
            <td><input class="trip-inputs" name="duration" type="number"  min=1 max=999 required ></td>
        </tr>
        <tr>
            <td id="summary-align"><label class="trip-labels" for="summary">Summary: </label></td>
            <td><textarea id="trip-textarea"  name="summary" rows="10"  maxlength=350 required ></textarea>
        </tr>
        <tr>
            <td></td>
            <td><input id="submit" class="trip-submit" type="submit"></td>
        </tr>
    </table>
    
    </form>
    <br>
    <br>

</div>
<br>
<br>

<!-- Footer -->

<?php require "pageAssets/footer.php" ?>