<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./visao/css/estilo.css">
  <title>Tela Inicial</title>
</head>

<body id="body">

  <div id="login">
    <form action="./login.php" class="card" method="POST">
      <div class="card-header">
        <h2>Login</h2>
      </div>
      <div class="card-content">
        <div class="card-content-area">
          <label for="usuario">Usuário</label>
          <input type="text" id="usuario" name="usuario" autocomplete="off">
        </div>
        <div class="card-content-area">
          <label for="senha">Senha</label>
          <input type="password" id="senha" name="senha" autocomplete="off">
        </div>
        <?php
        if(isset($_SESSION['invalido'])):
        ?>
        <div class="erro">
          <p>Usuário ou senha inválidos.</p>
        </div>
        <?php
        endif;
        unset($_SESSION['invalido']);
        ?>
      </div>
      <div class="card-footer">
        <button class="entrar"> Entrar </button>
      </div>
    </form>
  </div>

</body>

</html>