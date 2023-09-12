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
            <li class="link"><a href="/home">LOGIN <i class="fa-solid fa-arrow-right-to-bracket"></i></a></li>
        </ul>
    </div>
</nav>

<script>
    document.querySelector("#dropdown-toggle").addEventListener("click", function(){
        document.querySelector("#dropdown-menu").classList.toggle("hidden");
    });
</script>

<?php } ?>