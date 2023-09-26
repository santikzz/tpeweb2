<?php

session_start();

if(!$_SESSION["is_logged"] || $_SESSION["user_accesslevel"] <= 1){
  header("Location: " . BASE_URL);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <title>Admin dashboard</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
        <li class="nav-item">
          <a class="nav-link" href="/">Back home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/dashboard/movies">Movies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dashboard/genres">Genres</a>
        </li>
      </ul>
        <button class="btn btn-outline-primary" type="submit"><?php echo strtoupper($_SESSION["user_name"]); ?></button>
    </div>
  </div>
</nav>
