<?php

require_once "./app/models/user.model.php";
// require_once "./app/views/user.view.php";

class UserController{

    private $model;
    private $view;

    public function __construct(){
        $this->model = new UserModel();
        // $this->view = new UserView();
    }

    public function validate(){
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        // sanitize input
        $username = filter_var($username, FILTER_SANITIZE_STRING);
        $password = filter_var($password, FILTER_SANITIZE_STRING);

        // get user data
        $userdata = $this->model->getUser($username);

        // validate username and password
        if( $userdata && ($userdata->password === hash('sha256', $password)) ){

            session_start();
            $_SESSION["user_id"] = $userdata->id;
            $_SESSION["user_name"] = $userdata->username;
            $_SESSION["user_accesslevel"] = $userdata->accesslevel;
            $_SESSION["is_logged"] = true;

            header("Location: " . BASE_URL);

        }else{
            // $this->view->showLogin("Invalid username or password");
            header("Location: " . BASE_URL . "/home/loginerror");
        }
    }

    public function logout(){
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }

}