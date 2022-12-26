<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/estilo.css">
  <title>Verifica exclusão</title>
</head>

<body class="body">
    <?php
    $id = filter_input(INPUT_POST, 'idNotaPromissoria');

    echo "Deseja realmente excluir a notinha?";
    echo "<div class='verificaExclusao'>";
      echo "<form method='POST' action='./listagemInativas.php'>
            <button> Não </button>
          </form>";
      echo "<form method='POST' action='exclui.php'> 
            <input type='hidden' name='idNotaPromissoria' value='$id'>
            <input type='hidden' name='checado' value='1'> 
            <button> Sim </button>
          </form>";
    echo "</div>";
    ?>
</body>

</html>