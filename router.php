<?php

// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' .$_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

require_once "./app/controllers/movie.controller.php";
//require_once "./app/controllers/user.controller.php";
require_once "./app/helpers/auth.helper.php";
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

    // case "watch":
    //     $id = isset($params[1])?$params[1]:0;
    //     $movieController = new MovieController();
    //     $movieController->showPlayMovie($id);
    //     break;

    case "login":
        $authHelper = new AuthHelper();
        $authHelper->login();
        break;

    case "logout":
        $authHelper = new AuthHelper();
        $authHelper->logout();
        break;

    case "dashboard":
        $dashboardController = new DashboardController();
        if(empty($params[1])){
            $dashboardController->showHome();

        }elseif($params[1] == "new"){
            $dashboardController->showAddNew();

        }elseif($params[1] == "add"){
            $dashboardController->addNew();
        
        }elseif($params[1] == "deleteGenre"){
            $dashboardController->deleteGenre($params[2]);
        
        }elseif($params[1] == "deleteMovie"){
            $dashboardController->deleteMovie($params[2]);
        
        }elseif($params[1] == "editMovie"){
            $dashboardController->editMovie($params[2]);
        
        }elseif($params[1] == "editGenre"){
            $dashboardController->editGenre($params[2]);
        
        }elseif($params[1] == "update"){
            $dashboardController->update();
        }


        break;
    
    default:
        // require("pages/errors.php");
        
        break;

}
