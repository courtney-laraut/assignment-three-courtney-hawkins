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

<!-- Center Figure -->


<figure class="textover">
    <img src="images/canoe.jpg" alt="Canoe on Water">
    <figcaption>Come Experience Canada</figcaption>
</figure>


<!-- Main Text Articles -->

    <article class="upcoming-adventures">
        <div>
            <h2>Upcoming Adventures</h2>
                <h3>Halifax</h3>
                    <p>Date: 2017-04-12</p>
                    <p>Duration: 4 days</p>
                <br>
                <h4>Summary</h4>
                    <p> Join us for a trip back in time as we explore the Canada of the past, starting with Halifax in the year 2017! Did you know that people who hail from Halifax are called Haligonians? I did not fact check this, so it may or may not be accurate. I'm very certain a true Haligonian would be able to clear this up for you.</p>
                <h3>Sydney</h3>
                    <p>Date: 2017-05-10</p>
                    <p>Duration: 2 days</p>
                <br>
                <h4>Summary</h4>
                    <p>We continue our journey through time with Sydney, also in the year 2017! Sydney is home to the world's largest fiddle which stands a loft 18m talls. It can be seen day or night from the Joan Harriss Cruise Pavilion. I have not been able to confirm or deny if there are imitation world's largest fiddles that may be purchased as souvenirs.</p>
                <br>
                <a class="all-link" href="all-adventures.php">See all our adventures >></a>
                <br>
                <br>
        </div>
        
    </article>

<!-- Footer -->

<?php require "pageAssets/footer.php"?>

<!-- End of Page -->
</body>
</html>