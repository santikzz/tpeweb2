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
        $stmt = $this->db->prepare("SELECT id, nombre, autor, id_genero, image FROM pelicula WHERE id = :id");
        $stmt->execute(["id" => $id]);
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    public function getGenre($id){
        $stmt = $this->db->prepare("SELECT id, nombre FROM genero WHERE id = :id");
        $stmt->execute(["id" => $id]);
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    public function getGenres(){
        $stmt = $this->db->prepare("SELECT id, nombre FROM genero");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function addMovie($title, $genre_id, $author, $image){
        $stmt = $this->db->prepare("INSERT INTO `pelicula` (`nombre`, `id_genero`, `autor`, `image` ) VALUES (:nombre, :id_genero, :autor, :imageurl)");
        $stmt->execute(["nombre" => $title, "id_genero" => $genre_id, "autor" => $author, "imageurl" => $image]);
    }

    public function addGenre($nombre){
        $stmt = $this->db->prepare("INSERT INTO `genero` (`nombre`) VALUES (:nombre)");
        $stmt->execute(["nombre" => $nombre]);
    }
    
    public function deleteGenre($id){
        $stmt = $this->db->prepare("DELETE FROM `genero` WHERE `id` = :id");
        $stmt->execute(["id" => $id]);
    }
    public function deleteMovie($id){
        $stmt = $this->db->prepare("DELETE FROM `pelicula` WHERE `id` = :id");
        $stmt->execute(["id" => $id]);
    }

    public function updateMovie($title, $genre_id, $author, $image, $id){
        $stmt = $this->db->prepare("UPDATE `pelicula` SET `nombre` = :nombre, `id_genero` = :id_genero, `autor` = :autor, `image` = :imageurl WHERE `id` = :id ");
        $stmt->execute(["nombre" => $title, "id_genero" => $genre_id, "autor" => $author, "imageurl" => $image, "id" => $id]);
    }

    public function updateGenre($nombre, $id){
        $stmt = $this->db->prepare("UPDATE `genero` SET `nombre` = :nombre WHERE `id` = :id");
        $stmt->execute(["nombre" => $nombre, "id" => $id]);
    }

    

}