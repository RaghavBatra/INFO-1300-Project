<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Ithaca Apple Fest</title>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/change_logo.js"></script>
    </head>

<body>

    <div id="top">
        <img src="images/apples_newest.jpg" alt="apple banner image">
        <!--  Image credits: Edited by Rona Chang from public Google+ profile of Ksenia Verdiyan: https://plus.google.com/+Cornell/posts/4pevhgQZwJY -->
    </div>
      <!-- end of the top banner -->

    <?php
        include 'includes/header.php';
    ?>

    <div id="content">

        <h1> Join us for the 34th Annual Great Downtown Ithaca Apple Harvest Festival! </h1>
        <h3>Date: September 30, 2017 - October 2, 2017 </h3>

        <div id="row1">

            <a href = "photogallery.php"><img src="images/photos.jpg" id="photogallery" alt="photo gallery image"></a>
            <!-- Image credits: Edited by Rona Chang from https://www.flickr.com/photos/106103661@N02/21839482248/ -->
            <p id= "vendor"><b>Over 100 vendors will be selling unique apple varieties:</b> hot apple cider donuts,
            kettle corn, local farm fresh baked goods and a multitude of around the world specialties </p>
            <img src="images/vendors.jpg" id="times" alt="event times">
            <!-- Image credits: Edited by Rona Chang from  https://www.flickr.com/photos/106103661@N02/15266671578/ -->

        </div>

        <div id="nextcontentsection">
            <h4>Take a Break from Studying and Come for... </h4>
            <p id = "overview">Craft Show, Live Music, Street Performers, Farmers Market, Food Vendors</p>
            <p id = "apples">...AND LOTS OF APPLES </p>

          </div>

    </div>

    <?php
        include 'includes/footer.php';
    ?>


</body>
</html>
