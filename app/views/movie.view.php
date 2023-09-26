<?php


class MovieView {

    public function showHome($movies){
        require_once "./templates/template.header.php";
        require_once "./templates/template.home.php";
        require_once "./templates/template.footer.php";
    }

    public function showMovies($movies, $genre){

        require_once "./templates/template.header.php";
        ?>
        <div class="content">
            <div class="title">
                <h2 class="genre-title"><i class="fa-solid fa-magnifying-glass"></i> <?php echo empty($genre)?"ALL MOVIES":strtoupper($genre); ?></h2>
            </div>
            <div class="movies-list show-all">
                
                <?php
                if($movies){
                    foreach($movies as $movie){ ?>
                        <div class="card">
                            <a class="card-link" href="/watch/<?php echo $movie->id; ?>">
                                <img class="image" src="images/<?php echo $movie->image; ?>">
                            </a>
                            <label><?php echo $movie->nombre; ?></label>
                        </div>
                <?php } } ?>
            </div>
        </div>
        <?php
        require_once "./templates/template.footer.php";
    }


    public function showPlayMovie($movie){
        require_once "./templates/template.header.php";
        ?>
        <div class="content">
            <h2><?php echo "( movie id: $movie->nombre )"; ?></h2>
            <?php var_dump($movie); ?>
        </div>
        <?php
        require_once "./templates/template.footer.php";
    }

    public function showGenres($genres){
        require_once "./templates/template.header.php";
        ?>
            <div class="genres">
        <?php
        
        if($genres){
            foreach($genres as $genre){ ?>

                <a class="genre" href="/movies/<?php echo strtolower($genre->nombre); ?>">
                   <?php echo $genre->nombre; ?>
                </a>
               
        <?php } } ?>
            </div>
        <?php
        require_once "./templates/template.footer.php";
    }

}

