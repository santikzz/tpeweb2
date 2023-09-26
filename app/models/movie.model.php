<?php

require_once "./app/database/database.php";

class MovieModel{

    private $db;

    public function __construct(){
        $this->db = db_connect();  
    }

    public function getAllMovies(){
        $stmt = $this->db->prepare("SELECT p.id, p.nombre, p.autor, g.nombre AS 'genero', p.image FROM pelicula p
            LEFT JOIN genero g ON p.id_genero = g.id
        ");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function getAllMoviesByGenre($genre){
        $stmt = $this->db->prepare("SELECT p.id, p.nombre, p.autor, p.image FROM pelicula p
            LEFT JOIN genero g ON g.id = p.id_genero
            WHERE g.nombre = ?
        ");
        $stmt->execute(array($genre));
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function getTrendingMovies(){
        $stmt = $this->db->prepare("SELECT id, nombre, autor, image FROM pelicula LIMIT 6");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function getMovie($id){
        $stmt = $this->db->prepare("SELECT id, nombre, autor, image FROM pelicula WHERE id = ?");
        $stmt->execute(array($id));
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    public function getGenres(){
        $stmt = $this->db->prepare("SELECT id, nombre FROM genero");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    

}