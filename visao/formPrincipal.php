<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Icones -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="./estilo.css">
  <title>Página Principal</title>
</head>

<body>
  <?php
  include('../verificaLogin.php');
  ?>
  <?php
  include('./menu.php');
  ?>
  <div class="funcionario">
    <p >
      <?php
      echo 'Bem vindo: ';
      echo $_SESSION['nome'];
      ?>
    </p>
    <a href="../logout.php"><img src="./css/imagens/sair.png"></a>
  </div>
</body>

</html>