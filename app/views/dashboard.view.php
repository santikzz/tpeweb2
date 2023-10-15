<?php

require_once("smarty-4.3.4/libs/Smarty.class.php");
class DashboardView {

    private $smarty;
    private $auth;

    public function __construct(){
        $this->auth = new AuthHelper();
        
        if (!$this->auth->checkLoggedIn() && !$this->auth->checkIsAdmin()){
            header("Location: ".BASE_URL);
            die();
        }
        
        $this->smarty = new Smarty();
        
        $this->smarty->assign("basehref", BASE_URL);
        $this->smarty->assign('isLogged', $this->auth->checkLoggedIn());
        $this->smarty->assign('isAdmin', $this->auth->checkIsAdmin());
        $this->smarty->assign('username', $this->auth->getUsername());
    }
    public function showHome($movies, $genres, $error = null){
        $this->smarty->assign("title", 'Uniflix - Admin Dashboard');
        $this->smarty->assign('error', $error);
        $this->smarty->assign('movies', $movies);
        $this->smarty->assign('genres', $genres);
        $this->smarty->display("templates/template.dashboard_home.tpl");
    }

    public function showAddNew($genres, $error = null){
        $this->smarty->assign("title", 'Uniflix - Admin Dashboard');
        $this->smarty->assign('error', $error);
        $this->smarty->assign('genres', $genres);
        $this->smarty->display("templates/template.dashboard_addNew.tpl");
    }

    public function showEditGenre($genre, $error = null){
        $this->smarty->assign("title", 'Uniflix - Admin Dashboard');
        $this->smarty->assign('error', $error);
        $this->smarty->assign('genre', $genre);
        $this->smarty->display("templates/template.dashboard_editGenre.tpl");
    }

    public function showEditMovie($movie, $genres, $error = null){
        $this->smarty->assign("title", 'Uniflix - Admin Dashboard');
        $this->smarty->assign('error', $error);
        $this->smarty->assign('movie', $movie);
        $this->smarty->assign('genres', $genres);
        $this->smarty->display("templates/template.dashboard_editMovie.tpl");
    }

    

}