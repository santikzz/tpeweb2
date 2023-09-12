<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// get action & param
$action = isset($_GET["action"])?$_GET["action"]:"home";

// parse params
$params = explode("/", $action);

// endpoints
switch($params[0]){

    case "home":
        require("pages/home.php");
        show_home();
        break;

    
    case "movies":

        require("pages/movies.php");

        if( isset($params[1]) ){
            show_movies($params[1]);
        }else{
            show_movies();
        }   
        
        break;

    case "watch":
        require("pages/watch.php");
        // check if param is set, else default 0
        $id = isset($params[1])?$params[1]:0;
        show_watch_movie($id);
        break;

    case "login":
        require("pages/login.php");
        show_login();
        break;

    default:
        //show_error_notfound();
        break;

}
