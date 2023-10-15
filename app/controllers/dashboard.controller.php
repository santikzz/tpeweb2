<?php

// ?
require_once "./app/models/movie.model.php";
require_once "./app/views/dashboard.view.php";

class DashboardController{

    private $model;
    private $view;

    public function __construct(){
        $this->model = new MovieModel();
        $this->view = new DashboardView();
    }

    public function showHome(){
        $movies = $this->model->getAllMovies();
        $genres = $this->model->getGenres();
        $this->view->showHome($movies, $genres);
    }

    public function showAddNew(){
        $genres = $this->model->getGenres();
        $this->view->showAddNew($genres);
    }

    public function addNew(){

        if(isset($_POST["newMovie"])){

            $title = $_POST["title"];
            $genre = $_POST["genre"];
            $author = $_POST["author"];
            $image = $_POST["image"];

            $this->model->addMovie($title, $genre, $author, $image);

        }elseif(isset($_POST["newGenre"])){

            $name = $_POST["name"];
            $this->model->addGenre($name);
            
        }

        header("Location:".BASE_URL."/dashboard");
    }

    public function deleteGenre($id){
        $this->model->deleteGenre($id);
        header("Location: ".BASE_URL."/dashboard");
    }
    public function deleteMovie($id){
        $this->model->deleteMovie($id);
        header("Location: ".BASE_URL."/dashboard");
    }

    public function editGenre($id){
        $genre = $this->model->getGenre($id);
        $this->view->showEditGenre($genre);
    }

    public function editMovie($id){
        $genres = $this->model->getGenres();
        $movie = $this->model->getMovie($id);
        $this->view->showEditMovie($movie, $genres);
    }

    public function update(){
        
        if(isset($_POST["updateMovie"])){

            $id = $_POST["id"];
            $title = $_POST["title"];
            $genre = $_POST["genre"];
            $author = $_POST["author"];
            $image = $_POST["image"];

            $this->model->updateMovie($title, $genre, $author, $image, $id);

        }elseif(isset($_POST["updateGenre"])){

            $name = $_POST["title"];
            $id = $_POST["id"];

            $this->model->updateGenre($name, $id);
            
        }
        header("Location: ".BASE_URL."/dashboard");
    }
    
    
}