<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Edição de Vendas Diárias</title>
</head>
<body class="body">
    <?php
       require_once '../../dao/DAOProdutosDaVenda.php';
       require_once '../../dao/Conexao.php';
       require_once '../../modelo/ProdutosDaVenda.php';

        $obj = new ProdutosDaVenda();
        $dao = new DAOProdutosDaVenda();

        $idEstoque = filter_input(INPUT_POST, 'idEstoque');
        $idVendaAVista = filter_input(INPUT_POST, 'idVendaAVista');
        $quantidade = filter_input(INPUT_POST, 'quantidade');
        $valor = filter_input(INPUT_POST, 'valorUnitario');

        if (($idEstoque && $idVendaAVista && $quantidade && $valor)) {
            $obj->setIdEstoque($idEstoque);
            $obj->setIdVendaAVista($idVendaAVista);
            $obj->setQuantidade($quantidade);
            $obj->setValor($valor);

            if ($dao->altera($obj)) {
                echo '<h1>Produto editado com sucesso!</h1>';
                echo '<br><a href="../../index.php">Inicio</a>';
                echo '<br><a href="listagem.php"> Listagem </a><br>';
            } else {
                echo 'Deu alguma merda...';
            }
        } else {
            echo 'Dados ausentes ou incorretos!';
        }
    ?>
</body>
</html>