<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>{$title}</title>
    <base href="{$basehref}">
    <link rel="icon" type="image/png" href="images/icon.png">
    <link rel='stylesheet' type='text/css' media='screen' href='css/styles.css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
</head>

<body>

<nav class="nav">
    <div class="container">
        <ul class="links">
            <li class="link"><a href="/home" id="home"><i class="fa-solid fa-house"></i></a></li>
            <li class="link"><a href="/movies">MOVIES</a></li>
            <li class="link"><a href="/movies">SERIES</a></li>
            <li class="link"><a href="/movies">TRENDING</a></li>
            <li class="link"><a href="/genres"><i class="fa-solid fa-bars"></i> GENRES</a></li>
        </ul>
        <ul class="links">
                        
            {if not $isLogged}
                <li class="link"><a id="open-nav">LOGIN <i class="fa-solid fa-arrow-right-to-bracket"></i></a></li>
            {else}
                <li class="link"><a id="open-nav">{$username}<i class="fa-solid fa-user"></i></a></li>    
            {/if}

        </ul>
    </div>

        <div class="sidenav-container" id="sidenav-container">

            {if not $isLogged}

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
                        <a class="link" href="/">Register</a>
                        <a class="link" href="/">Forgot your password?</a>
                    </div>
                </div>
            </form>

            {else}

                <div class="options">
                    {if $isAdmin} <a href="/dashboard">Admin dashboard</a> {/if}
                    <a href="/logout">Logout</a>
                </div>
                
            {/if}

        </div>

</nav>

<script type="text/javascript" src="/js/header.js"></script>