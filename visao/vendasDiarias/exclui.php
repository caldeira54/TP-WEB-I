<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclui Vendas Diárias</title>
</head>
<body>
    <?php
        require_once '../../dao/DAOVendasDiarias.php';
        require_once '../../dao/Conexao.php';
        require_once '../../modelo/VendasDiarias.php';

        $obj = new VendasDiarias();
        $dao = new DAOVendasDiarias();

        $id = filter_input(INPUT_GET, 'idVendasDiarias');

        $obj->setIdVendasDiarias($id);

        if($dao->exclui($obj)){
            echo '<h1>Venda diária excluída com sucesso</h1>';
            echo '<br><a href="../../index.php">Inicio</a>';
            echo '<br><a href="listagem.php"> Listagem de Venda Diárias </a><br>';
        } else {
            echo 'Deu alguma merda...';
        }
    ?>
</body>
</html>