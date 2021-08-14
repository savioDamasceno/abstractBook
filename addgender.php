<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Adicionar gênero literário</title>

    <link rel="shortcut icon" href="./src/images/favicon.png" type="image/x-icon">
    
    <link rel="stylesheet" href="./src/styles/style.css">
    <link rel="stylesheet" href="./src/styles/addgender.css">
    <link rel="stylesheet" href="./src/styles/styleButton.css">
</head>
<body>
<aside>
    <form action="./creategenero.php" method="POST">
      <fieldset>
        <legend class="smoothentry">Adicine um gênero literário </legend>
        <span class="smoothentry">
          <input required type="text" name="idgenres" placeholder="Genero"/>
          <button class="styleButton"><img src="./src/images/send.svg" alt="Enviar"></button>
        </span>
      </fieldset>
    </form>
  </aside>
  <aside id="img">
  <div class="smoothentry">
      <button type="button" class="clikamination styleButton" onclick="history.back()" title="Clique para voltar">
        <img src="./src/images/arrow-left.svg" draggable="false">
      </button>
    </div>
    <img src="./src/images/education.svg" class="smoothentry" draggable="false">
  </aside>
</body>
</html>