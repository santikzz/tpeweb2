<?php

require_once "./app/models/movie.model.php";
require_once "./app/views/movie.view.php";
require_once "./app/helpers/auth.helper.php";

class MovieController{

    private $model;
    private $view;

    public function __construct(){
        $this->model = new MovieModel();
        $this->view = new MovieView();
    }

    public function showHome(){
        // $movies = $this->model->getTrendingMovies();
        $this->view->showHome();
    }

    public function showMovies($genre){
        $genre = filter_var($genre, FILTER_SANITIZE_STRING);
        if(empty($genre)){
            $movies = $this->model->getAllMovies();
        }else{
            $movies = $this->model->getAllMoviesByGenre($genre);
        }    
        $this->view->showMovies($movies, $genre);
    }

    // public function showMoviesByGenre($genre){
    //     $movies = $this->model->getAllMoviesByGenre($genre);
    //     $this->view->showMovies($movies);
    // }

    public function showGenres(){
        $genres = $this->model->getGenres();
        $this->view->showGenres($genres);
    }

    public function showPlayMovie($id){
        $movie = $this->model->getMovie($id);
        $this->view->showPlayMovie($movie);
    }
    
}