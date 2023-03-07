<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- Icones -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="./estilo.css">
  <link rel="stylesheet" href="../sass/main.css">
  <title>Página Principal</title>
</head>

<body class="body">
  <?php
  session_start();
  if(!$_SESSION['usuario'])
  {
      header('Location: ../index.php');
      exit();
  }
  
  include('./menu.php');
  ?>
  <div class="rounded float-end text-center">
    <p class="card-text">
      <?php
      echo 'Bem vindo: ';
      echo $_SESSION['nome'];
      ?>
    </p>

    <a href="../logout.php"><img src="./css/imagens/sair.png" class="rounded float-end"></a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>