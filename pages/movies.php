<?php

require_once("includes/db.php");
require_once("includes/config.php");
require_once("pages/nav.php");

function show_movies($genre = null){ 
    
    if($genre != null){
        $movies = get_movies_by_genre($genre);
        $title = strtoupper($genre);
        
        if(!$movies){
            $title .= " - NOTHING FOUND";    
        }
     
    }else{
        $movies = get_movies();
        $title = "ALL MOVIES";
    }  

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title><?php echo SITE_NAME; ?></title>
    <base href="<?php echo BASE_URL; ?>">
    <link rel="icon" type="image/png" href="images/icon.png">
    <link rel='stylesheet' type='text/css' media='screen' href='css/styles.css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script type="text/javascript" src="scripts.js"></script>
</head>
<body class="body">

<?php show_nav(); ?>

<div class="content">

    <div class="title">
        <h2 class="genre-title"><i class="fa-solid fa-magnifying-glass"></i> <?php echo $title; ?></h2>
    </div>

    <div class="movies-list show-all">
        
        <?php
            if($movies){
                foreach($movies as $movie){ ?>
                
                    <div class="card">
                        <a class="card-link" href="/watch/<?php echo $movie->id."/".string_to_url($movie->nombre); ?>">
                            <img class="image" src="images/<?php echo $movie->image; ?>">
                        </a>
                        <label><?php echo $movie->nombre; ?></label>
                    </div>
                
        <?php 
                } 
            }
        ?>
    </div>

</div>


<footer>
</footer>

</body>

</html>

<?php } ?>