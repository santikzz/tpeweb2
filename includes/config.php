<?php

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' .$_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
define("SITE_NAME", "UniCinema");

function string_to_url($string){

    $string = str_replace(" ", "", $string);
    $string = strtolower($string);
    return $string;
}

?>