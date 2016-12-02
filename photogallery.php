<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Ithaca Apple Fest</title>
    <script src="js/photogallery.js"></script>
    <link rel="stylesheet" href="css/site.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/change_logo.js"></script>
    </head>

<body>

    <?php 
        include 'includes/header.php';
    ?>
    
    <div id = "photos">

        <p> 
        <button onclick="previous()">Previous</button> 
        <button onclick="next()">Next</button> 
        </p>

        <!--photo 1 from https://c2.staticflickr.com/6/5751/22027344875_aa950b1b1a_b.jpg 
         photo 2 from https://c1.staticflickr.com/1/702/22037228081_bb262c0a2d_b.jpg 
         photo 3 from https://c1.staticflickr.com/1/658/21404547274_a6b776f7c5_b.jpg
         photo 4 from https://c2.staticflickr.com/6/5767/21839482248_f3d9157b68_b.jpg
         photo 5 from https://c2.staticflickr.com/6/5689/22015033122_0f6407f424_b.jpg
         photo 6 from https://c2.staticflickr.com/6/5731/22001136566_c3dab9aaec_b.jpg
         photo 7 from https://c1.staticflickr.com/1/661/21406193973_5c116db026_b.jpg
         photo 8 from https://c2.staticflickr.com/6/5597/15266693508_0978216c3c_b.jpg
         photo 9 from https://c2.staticflickr.com/4/3930/15266598780_104b08c412_b.jpg
         photo 10 from https://c2.staticflickr.com/4/3750/10397073603_44526f0c2e_b.jpg
         photo 11 from https://c2.staticflickr.com/4/3927/15266595120_b32524ef48_b.jpg
         -->
        <img id="slides" src="images/photo1.jpg" alt="apple fest photos">

    </div>

   
    <?php 
        include 'includes/footer.php';
    ?>


</body>
</html>
