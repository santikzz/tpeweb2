<?php

require_once "./app/models/movie.model.php";
require_once "./app/views/dashboard.view.php";

class DashboardController{

    private $model;
    private $view;

    public function __construct(){
        $this->model = new MovieModel();
        $this->view = new DashboardView();
    }

    public function showDashboard(){
        $movies = $this->model->getAllMovies();
        $this->view->showDashboard($movies);
    }

}