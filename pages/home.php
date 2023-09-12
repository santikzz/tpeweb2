<?php

require_once("includes/db.php");
require_once("includes/config.php");
require_once("pages/nav.php");

function show_home(){ ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title><?php echo SITE_NAME; ?></title>
    <base href="<?php echo BASE_URL; ?>">
    <link rel="icon" type="image/png" href="images/icon.png">
    <link rel='stylesheet' type='text/css' media='screen' href='styles.css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script type="text/javascript" src="scripts.js"></script>
</head>
<body>

<?php show_nav(); ?>

<div class="background">
    <img class="overlay" src="images/overlay.png">
    <div id="banner-div">
        <img class="image" id="banner-image" src="images/874732.jpg">
        <img class="image hidden" id="banner-image" src="images/610687.jpg">
        <img class="image hidden" id="banner-image" src="images/615287.jpg">
        <img class="image hidden" id="banner-image" src="images/870886.jpg">
    </div>
</div>

<div class="content">

    <div class="banner">
        <h2 class="title">BLADE RUNNER 2049</h2>
        <label class="description">Directed by Ridley Scott - <span class="genre">Fiction</span></label>

        <div class="button-row">
            <button type="button" class="btn-play"><i class="fa-solid fa-play"></i> PLAY</button>
            <button type="button" class="btn-add"><i class="fa-solid fa-plus"></i></button>
        </div>
    </div>

    <div class="movies-list">
        <div class="card">
            <img class="image" src="images/9d8e73e436b536a7c81644c6e9877c7a.jpg">
        </div>
        <div class="card">
            <img class="image" src="images/f6409a20424831de047b9fe0dd959672.jpg">
        </div>
        <div class="card">
            <img class="image" src="images/d9f6067d2406a7cfbf42a5fc4ae4cd9d.jpg">
        </div>
        <div class="card">
            <img class="image" src="images/6cd691e19fffbe57b353cb120deaeb8f.jpg">
        </div>
        <div class="card">
            <img class="image" src="images/6065863209125e295754986589a1c93d.jpg">
        </div>
        <div class="card">
            <img class="image" src="images/2e9e934dfdb6bad26beb558534adccbd.jpg">
        </div>
    </div>

</div>


<footer>
</footer>

</body>

<script type="text/javascript">

    var banner_images = document.querySelectorAll("#banner-image");

    var i = 0;
    const interval = setInterval(function() {
        
        banner_images[i % 4].classList.toggle("hidden");
        i++; 
        banner_images[i % 4].classList.toggle("hidden");

    }, 5000);



</script>

</html>



<?php } ?>