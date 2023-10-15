<?php

require_once("smarty-4.3.4/libs/Smarty.class.php");
class MovieView {

    private $smarty;
    private $auth;

    public function __construct(){
        $this->auth = new AuthHelper();
        $this->smarty = new Smarty();
        $this->smarty->assign("basehref", BASE_URL);
        $this->smarty->assign('isLogged', $this->auth->checkLoggedIn());
        $this->smarty->assign('isAdmin', $this->auth->checkIsAdmin());
        $this->smarty->assign('username', $this->auth->getUsername());
    }

    public function showHome($error = null){
        $this->smarty->assign("title", 'Uniflix - Home');
        $this->smarty->assign('error', $error);
        $this->smarty->display("templates/template.home.tpl");
    }

    public function showMovies($movies, $genre, $error = null){
        $this->smarty->assign("title", 'Uniflix - '.strtoupper($genre));
        $this->smarty->assign('error', $error);
        $this->smarty->assign('movies', $movies);
        $this->smarty->assign('genre', empty($genre)?"ALL MOVIES":strtoupper($genre) );
        $this->smarty->display("templates/template.movies.tpl");
    }


    /*public function showPlayMovie($movie){
        require_once "./templates/template.header.php";
        ?>
        <div class="content">
            <h2><?php echo "( movie id: $movie->nombre )"; ?></h2>
            <?php var_dump($movie); ?>
        </div>
        <?php
        require_once "./templates/template.footer.php";
    }*/

    public function showGenres($genres, $error = null){
        $this->smarty->assign("title", 'Uniflix - Home');
        $this->smarty->assign('error', $error);
        $this->smarty->assign('genres', $genres);
        $this->smarty->display("templates/template.genres.tpl");
    }

}

