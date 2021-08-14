<?php
  require_once './classes/DAO/connectDB.php';
  require_once './classes/DAO/literaryGenreDAO.php';
  require_once './classes/entities/literaryGenre.php';

  $genres = $_POST['idgenres'];

  $genresDao = new literaryGenreDAO();

  $genresObj = new literaryGenre();

  $genresObj->setLiteraryGenre($genres);

  $genresDao->createLiteraryGenre($genresObj);

  header('Location: register.php');
?>