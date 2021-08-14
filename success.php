<?php

include "./classes/DAO/connectDB.php";

include "./classes/DAO/userDAO.php";

include "./classes/entities/user.php";

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = $_POST['password'];
$favoriteGenres = $_POST['idgenres'];



$userDAO = new UserDAO();

$userObj = new User();

$userObj->setName($name);
$userObj->setSurname($surname);
$userObj->setEmail($email);
$userObj->setPassword($password);
$userObj->setIdGenre($favoriteGenres);

$userDAO->createUser($userObj);


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Abstractbook</title>

  <link rel="shortcut icon" href="./src/images/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="./src/styles/style.css" />
  <link rel="stylesheet" href="./src/styles/success.css" />
  <link rel="stylesheet" href="./src/styles/styleButton.css" />
</head>

<body>
  <h1 class="smoothentry">Cadastrado com sucesso</h1>
  <img src="./src/images/Celebration.svg" class="smoothentry" draggable="false">
  <a class="styleButton smoothentry" href="index.php" title="Volte ao Home">
    <img src="./src/images/home.svg" alt="" srcset="">
  </a>
</body>