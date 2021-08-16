<?php
require_once './classes/DAO/connectDB.php';
require_once './classes/DAO/literaryGenreDAO.php';

$literaryGenreDAO = new literaryGenreDAO();

$listAllGenres = $literaryGenreDAO->getLiteraryGenre()

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
  <link rel="stylesheet" href="./src/styles/register.css" />
  <link rel="stylesheet" href="./src/styles/styleButton.css">
</head>

<body>
  <aside>
    <form action="success.php" method="POST">
      <fieldset>
        <legend class="smoothentry">Cadastro</legend>

        <span class="smoothentry">
          <label for="">Nome</label>
          <br>
          <input required type="text" name="name" />
        </span>

        <span class="smoothentry">
          <label for="">Sobrenome</label>
          <br>
          <input required type="text" name="surname" />
        </span>

        <span class="smoothentry">
          <label for="">E-mail</label>
          <br>
          <input required type="email" name="email" />
        </span>

        <span class="smoothentry">
          <label for="">Senha</label>
          <br>
          <input required type="password" name="password" />
        </span>


        <span class="smoothentry">
          <label for="">Selecione seu gênero literário preferido</label>
          <br>

          <div id="blockcheckbox" class="smoothentry">
            <?php
            foreach ($listAllGenres as $genres) {
            ?>
              <label for="<?php echo $genres['genero']; ?>"><input required name="idgenres" value="<?php echo $genres['id_genero']; ?>" type="radio" id="<?php echo $genres['genero']; ?>">
                <div><?php echo $genres['genero']; ?></div>
              </label>
            <?php
            }
            ?>
          </div>
        </span>
        <button class="clikamination smoothentry styleButton ">
          <img src="./src/images/user-plus.svg" draggable="false">
        </button>
      </fieldset>
    </form>
  </aside>
  <aside id="img">
    <div class="smoothentry">
      <a href="index.php">
        <button type="button" class="clikamination styleButton" title="Clique para voltar">
          <img src="./src/images/arrow-left.svg" draggable="false">
        </button>
      </a>
      <a href="addgender.php">
        <button type="button" class="clikamination styleButton" id="addgener" title="Adicione um gênero literário">
          <img src="./src/images/plus.svg" draggable="false">
        </button>
      </a>
    </div>
    <img src="./src/images/maquina.svg" class="maquina smoothentry" draggable="false">
  </aside>
</body>

</html>