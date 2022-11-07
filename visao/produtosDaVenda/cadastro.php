<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro dos Produtos da Venda à Vista</title>
</head>
<body>
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

        var_dump($idEstoque);
        var_dump($idVendaAVista);
        var_dump($quantidade);
        var_dump($valor);

        if (($idEstoque && $idVendaAVista && $quantidade && $valor)) {
            $obj->setIdEstoque($idEstoque);
            $obj->setIdVendaAVista($idVendaAVista);
            $obj->setQuantidade($quantidade);
            $obj->setValor($valor);

            if ($dao->inclui($obj)) {
                echo '<h1>Produto cadastrado na venda com sucesso!</h1>';
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