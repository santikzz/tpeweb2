<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>UNIFLIX</title>
    <base href="<?php echo BASE_URL; ?>">
    <link rel="icon" type="image/png" href="images/icon.png">
    <link rel='stylesheet' type='text/css' media='screen' href='css/styles.css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script type="text/javascript" src="scripts.js"></script>
</head>

<body>

<nav class="nav">
    <div class="container">
        <ul class="links">
            <li class="link"><a href="/home" id="home"><i class="fa-solid fa-house"></i></a></li>
            <li class="link"><a href="/movies">MOVIES</a></li>
            <li class="link"><a href="/movies">SERIES</a></li>
            <li class="link"><a href="/movies">TRENDING</a></li>
            <?php /* <li class="link dropdown">
                <a class="dropdown-toggle" id="dropdown-toggle"><i class="fa-solid fa-bars"></i> GENRES</a>
                <ul class="dropdown-menu hidden" id="dropdown-menu">
                    <?php foreach($genres as $genre){ ?>
                        <li class="link"><a href="/movies/<?php echo strtolower($genre->nombre); ?>"><?php echo strtoupper($genre->nombre); ?></a></li>
                    <?php } ?>
                </ul>
            </li> */ ?>
            <li class="link"><a href="/genres"><i class="fa-solid fa-bars"></i> GENRES</a></li>
        </ul>
        <ul class="links">
                        
            <?php if(empty($_SESSION["is_logged"])){ ?>
                <li class="link"><a id="open-nav">LOGIN <i class="fa-solid fa-arrow-right-to-bracket"></i></a></li>
            <?php } else { ?>
                <li class="link"><a id="open-nav"><?php echo strtoupper($_SESSION["user_name"]); ?> <i class="fa-solid fa-user"></i></a></li>    
            <?php } ?>

        </ul>
    </div>

    

        <div class="sidenav-container" id="sidenav-container">

            <?php if(empty($_SESSION["is_logged"])){ ?>
            <form method="POST" action="/login">
                <div class="login-form">
                    <img class="logo" src="images/logo.png">   
                    <h2>Log In</h2>
                    <div class="input-group">
                        <span class="input-icon"><i class="fa-solid fa-user"></i></span>
                        <input class="input" type="text" name="username" placeholder="username or email">
                    </div>
                    <div class="input-group">
                        <span class="input-icon"><i class="fa-solid fa-lock"></i></span>
                        <input class="input" type="password" name="password" placeholder="password">
                    </div>
                    <div class="button-group">
                        <button type="submit" class="btn">Log In <i class="fa-solid fa-right-to-bracket"></i></button>
                    </div>
                    <div class="options">
                        <a class="link" href="#">Register</a>
                        <a class="link" href="#">Forgot your password?</a>
                    </div>
                </div>
            </form>
            <?php }else{ ?>

                <div class="options">
                    <?php if ($_SESSION["user_accesslevel"] > 1){ echo '<a href="/dashboard">Admin dashboard</a>'; } ?>
                    <a href="/logout">Logout</a>
                </div>
            <?php } ?>
        </div>

    

</nav>

<script>

    // --- toggle the genres dropdown --- //
    // const dropdownMenu = document.querySelector("#dropdown-menu");
    // const dropdownBtn = document.querySelector("#dropdown-toggle");
    // // open the dropdown when click on "genres"
    // dropdownBtn.addEventListener("click", function(event){
    //     dropdownMenu.classList.toggle("hidden");
    //     event.stopPropagation();
    // });
    // // close the dropdown when click outside 
    // document.addEventListener("click", function(event){
    //     if(!dropdownMenu.contains(event.target)){
    //         dropdownMenu.classList.add("hidden");
    //     }
    // });

    // --- toggle the login sidenav --- //
    const sideNav = document.querySelector("#sidenav-container");
    const openSideNav = document.querySelector("#open-nav");
    // open the nav when click on "login"
    openSideNav.addEventListener("click", function(event){
        sideNav.classList.add("active");
        event.stopPropagation();
    });
    // click outside the login nav to close it
    document.addEventListener("click", function(event){
        if(!sideNav.contains(event.target) && !openSideNav.contains(event.target)){
            sideNav.classList.remove("active");
        }
    });

</script>
