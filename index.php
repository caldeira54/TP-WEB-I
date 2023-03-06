<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="./visao/css/estilo.css"> -->
  <link rel="stylesheet" href="./sass/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Tela Inicial</title>
</head>

<body class="body">

  <div class="container-fluid text-center" style="width: 24rem;">
    <form action="./login.php" class="card text-center" method="POST">
      <div class="card-title">
        <h2>Login</h2>
      </div>
      <div class="card-body">
        <div class="input-group mb-5">
          <label for="usuario" class="input-group-text">Usuário</label>
          <input type="text" id="usuario" name="usuario" autocomplete="off" class="form-control">
        </div>
        <div class="input-group mb-5">
          <label for="senha" class="input-group-text">Senha</label>
          <input type="password" id="senha" name="senha" autocomplete="off" class="form-control">
        </div>
        <?php
        if(isset($_SESSION['invalido'])):
        ?>
        <div>
          <p class="text-danger">Usuário ou senha inválidos.</p>
        </div>
        <?php
        endif;
        unset($_SESSION['invalido']);
        ?>
      </div>
      <div class="card-footer">
        <button class="btn btn-outline-success"> Entrar </button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>