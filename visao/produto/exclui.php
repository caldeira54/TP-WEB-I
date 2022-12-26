<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Exclui Produto</title>
</head>
<?php
include('../../verificaLogin.php');
?>

<body class="body">
    <?php
    require_once '../../dao/DAOProduto.php';
    require_once '../../dao/Conexao.php';
    require_once '../../modelo/Produto.php';

    $obj = new Produto();
    $dao = new DAOProduto();

    $id = filter_input(INPUT_POST, 'idEstoque');
    $checado = filter_input(INPUT_POST, 'checado');

    $obj->setIdEstoque($id);

    if ($checado) {
        try {
            $dao->exclui($obj);
            echo '<script>
                    alert("Produto excluído com sucesso");
                    window.location.href = "./listagem.php";
                 </script>';
        } catch (Exception $e) {
            echo '<script>
                    alert("Não é possível excluir esse produto no momento!");
                    window.location.href = "./listagem.php";
                  </script>';
        }
    }
    ?>
</body>

</html>