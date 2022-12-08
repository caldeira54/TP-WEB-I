<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica exclusão</title>
</head>

<body>
    <?php
    $id = filter_input(INPUT_GET, 'idFornecedor');

    echo 'Deseja realmente excluir? <br>';
    echo '<a href="./exclui.php?id=idFornecedor">Sim</a>
          <br>
          <a href="./listagem.php">Não</a>';
    ?>

    <!-- <div class="excluir">
        <h3>Excluir Fornecedor</h3>
        <p>Deseja realmente excluir o fornecedor?</p>

        <a href="./exclui.php?id=idFornecedor">Sim</a>
        <br>
        <a href="./listagem.php">Não</a>
    </div> -->
</body>

</html>