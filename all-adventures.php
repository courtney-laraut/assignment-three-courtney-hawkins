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


<!-- All Trips Formatting -->

<article class="adventures">
        <div>
              <?php
              $sql = "SELECT * FROM alladventures";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                echo "<div class=\"alltripdiv\"><h2 class=\"alltriph2\">All Adventures</h2>";
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo "<h3 class=\"alltriph3\">".$row["heading"]."<a href=\"admin-edit.php?id=".$row['id']."\"><img src=\"images/edit.png\" alt=\"edit button\" id=\"editBtn\"></a><a href=\"admin-delete.php?id=".$row['id']."\"><img src=\"images/delete.png\" alt=\"delete button\" id=\"editBtn\"></a></h3><p class=\"alltripp\">Date: ".$row["tripDate"]."</p><p class=\"alltripp\">Duration: ".$row["duration"]." day(s) </p><br><h4 class=\"alltriph4\">Summary</h4><p class=\"alltripp\">".$row["summary"]."<br><br>";
                }
                echo "</div>";
              }
              ?>
          <a class="all-link" href="admin-add.php">Add an adventure >></a>
          <br>
          <br>
        </div>
        
    </article>

<!-- Footer -->

<?php require "pageAssets/footer.php" ?>