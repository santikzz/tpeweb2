<?php

require_once("includes/db.php");
require_once("includes/config.php");
require_once("pages/nav.php");

function show_genre($id){ 



?>

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
<body class="body">

<?php show_nav(); ?>

<div class="content">

    <div class="title">
        <h2 class="genre-title"><i class="fa-solid fa-magnifying-glass"></i> <?php echo strtoupper($id); ?></h2>
    </div>

    <div class="movies-list show-all">
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
        <div class="card">
            <img class="image" src="images/9d8e73e436b536a7c81644c6e9877c7a.jpg">
        </div>
        <div class="card">
            <img class="image" src="images/f6409a20424831de047b9fe0dd959672.jpg">
        </div>
        <div class="card">
            <img class="image" src="images/d9f6067d2406a7cfbf42a5fc4ae4cd9d.jpg">
        </div>

    </div>

</div>


<footer>
</footer>

</body>

</html>

<?php } ?>