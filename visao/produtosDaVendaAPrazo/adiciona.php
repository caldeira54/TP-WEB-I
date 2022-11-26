<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adiona produtos na venda</title>
</head>
<body>
<?php
        require_once '../../dao/DAOProdutosDaVendaAPrazo.php';
        require_once '../../dao/Conexao.php';
        require_once '../../modelo/ProdutosDaVendaAPrazo.php';

        $obj = new ProdutosDaVendaAPrazo();
        $dao = new DAOProdutosDaVendaAPrazo();

        $idEstoque = filter_input(INPUT_POST, 'idEstoque');
        $idVendaAPrazo = filter_input(INPUT_POST, 'idVendaAPrazo');
        $quantidade = filter_input(INPUT_POST, 'quantidade');
        $valor = filter_input(INPUT_POST, 'valor');

        var_dump($idEstoque);
        var_dump($idVendaAPrazo);
        var_dump($quantidade);
        var_dump($valor);

        if (($idEstoque && $idVendaAPrazo && $quantidade && $valor)) {
            $obj->setIdEstoque($idEstoque);
            $obj->setIdVendaAPrazo($idVendaAPrazo);
            $obj->setQuantidade($quantidade);
            $obj->setValor($valor);

            if ($dao->adicionaProutos($obj)) {
                $dao->atualizaEstoque($idEstoque, $quantidade);
                echo 'Produto adicionado com sucesso!';
                echo '<br><a href="../formPrincipal.php">Inicio</a>';
                echo '<br><a href="listagem.php"> Listagem </a><br>';
            } else {
                echo 'Deu alguma merda...';
            }
        } else {
            echo 'Dados ausentes ou incorretos!';
        }
    ?>
</body>
<script src="./popup.js"></script>
</html>