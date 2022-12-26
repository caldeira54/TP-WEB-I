<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Exclui Vendas Diárias</title>
</head>
<?php
include('../../verificaLogin.php');
?>

<body class="body">
    <?php
    require_once '../../dao/DAOVendasDiarias.php';
    require_once '../../dao/Conexao.php';
    require_once '../../modelo/VendasDiarias.php';

    $obj = new VendasDiarias();
    $dao = new DAOVendasDiarias();

    $id = filter_input(INPUT_POST, 'idVendasDiarias');
    $checado = filter_input(INPUT_POST, 'checado');

    $obj->setIdVendasDiarias($id);

    if ($checado) {
        try {
            $dao->exclui($obj);
            echo '<script>
                    alert("Venda Diária excluida com sucesso!");
                    window.location.href = "./listagem.php";
                  </script>';
        } catch (Exception) {
            echo '<script>
                    alert("Não foi possível excluir a venda!");
                    window.location.href = "./listagem.php";
                  </script>';
        }
    }
    ?>
</body>

</html>