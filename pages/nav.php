<?php 

function show_nav(){ 
    $genres = get_genres();
?>

<nav class="nav">
    <div class="container">
        <ul class="links">
            <li class="link"><a href="/home" id="home"><i class="fa-solid fa-house"></i></a></li>
            <li class="link"><a href="/movies">MOVIES</a></li>
            <li class="link"><a href="/movies">SERIES</a></li>
            <li class="link"><a href="/movies">TRENDING</a></li>
            <li class="link dropdown">
                <a class="dropdown-toggle" id="dropdown-toggle"><i class="fa-solid fa-bars"></i> GENRES</a>
                <ul class="dropdown-menu hidden" id="dropdown-menu">
                    <?php foreach($genres as $genre){ ?>
                        <li class="link"><a href="/movies/<?php echo strtolower($genre->nombre); ?>"><?php echo strtoupper($genre->nombre); ?></a></li>
                    <?php } ?>
                </ul>
            </li>
        </ul>
        <ul class="links">
            <li class="link"><a id="login-btn">LOGIN <i class="fa-solid fa-arrow-right-to-bracket"></i></a></li>
        </ul>
    </div>

    <div class="login-container" id="login-nav">

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

    </div>

</nav>

<script>

    // --- toggle the genres dropdown --- //
    const dropdownMenu = document.querySelector("#dropdown-menu");
    const dropdownBtn = document.querySelector("#dropdown-toggle");
    // open the dropdown when click on "genres"
    dropdownBtn.addEventListener("click", function(event){
        dropdownMenu.classList.toggle("hidden");
        event.stopPropagation();
    });
    // close the dropdown when click outside 
    document.addEventListener("click", function(event){
        if(!dropdownMenu.contains(event.target)){
            dropdownMenu.classList.add("hidden");
        }
    });

    // --- toggle the login sidenav --- //
    const loginNav = document.querySelector("#login-nav");
    const openLoginNav = document.querySelector("#login-btn");
    // open the nav when click on "login"
    openLoginNav.addEventListener("click", function(event){
        loginNav.classList.add("active");
        event.stopPropagation();
    });
    // click outside the login nav to close it
    document.addEventListener("click", function(event){
        if(!loginNav.contains(event.target) && !openLoginNav.contains(event.target)){
            loginNav.classList.remove("active");
        }
    });

</script>

<?php } ?>