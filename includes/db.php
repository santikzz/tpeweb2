<?php


function db_connect(){
    try {
        $db = new PDO("mysql:host=localhost;dbname=tudai", 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
}


function get_genres(){
    $db = db_connect();
    $stmt = $db->prepare("SELECT nombre FROM genero");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
}

function get_movies(){
    $db = db_connect();
    $stmt = $db->prepare("SELECT id, nombre, autor, image FROM pelicula");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
}

function get_movies_by_genre($genre){
    $db = db_connect();
    
    // $genre = filter_var($genre, FILTER_SANITIZE_STRING);

    $stmt = $db->prepare("SELECT p.id, p.nombre, p.autor, p.image FROM pelicula p
        LEFT JOIN genero g ON g.id = p.id_genero
        WHERE g.nombre = ?
    ");

    $stmt->execute(array($genre));
    $stmt->execute();

    if($stmt->rowCount() == 0){
        return false;
    }

    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;

}




?>