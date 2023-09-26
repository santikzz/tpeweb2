<?php

// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' .$_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

require_once "./app/controllers/movie.controller.php";
require_once "./app/controllers/user.controller.php";
require_once "./app/controllers/dashboard.controller.php";

// get action & param
$action = isset($_GET["action"])?$_GET["action"]:"home";

// parse params
$params = explode("/", $action);

// endpoints
switch($params[0]){

    case "home":
        $movieController = new MovieController();
        $movieController->showHome();
        break;

    case "movies":
        $movieController = new MovieController();
        $movieController->showMovies( isset($params[1])?$params[1]:"" );
        break;

    case "genres":
        $movieController = new MovieController();
        $movieController->showGenres();
        break;

    case "watch":
        $id = isset($params[1])?$params[1]:0;
        $movieController = new MovieController();
        $movieController->showPlayMovie($id);
        break;

    case "login":
        $userController = new UserController();
        $userController->validate();
        break;

    case "logout":
        $userController = new UserController();
        $userController->logout();
        break;

    case "dashboard":
        $dashboardController = new DashboardController();
        $dashboardController->showDashboard();
        break;
    
    default:
        // require("pages/errors.php");
        
        break;

}
