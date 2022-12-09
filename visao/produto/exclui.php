<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclui Produto</title>
</head>

<body>
    <?php
    require_once '../../dao/DAOProduto.php';
    require_once '../../dao/Conexao.php';
    require_once '../../modelo/Produto.php';

    $obj = new Produto();
    $dao = new DAOProduto();

    $id = filter_input(INPUT_GET, 'idEstoque');

    $obj->setIdEstoque($id);

    if ($dao->exclui($obj)) {
        echo '<script>
                alert("Produto apagado com sucesso");
                window.location.href = "./listagem.php";
              </script>';
    } else {
        echo 'Deu alguma merda...';
    }
    ?>
</body>

</html>