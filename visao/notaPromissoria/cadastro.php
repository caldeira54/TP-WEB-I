<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Nota Promissória</title>
</head>
<body>
    <?php
        require_once '../../dao/DAONotaPromissoria.php';
        require_once '../../dao/Conexao.php';
        require_once '../../modelo/NotaPromissoria.php';

        $obj = new NotaPromissoria();
        $dao = new DAONotaPromissoria();

        $idFornecedor = filter_input(INPUT_POST, 'idFornecedor');
        $preco = filter_input(INPUT_POST, 'preco');
        $dataCompra = filter_input(INPUT_POST, 'dataCompra');
        $dataPagamento = filter_input(INPUT_POST, 'dataPagamento');

        var_dump($idFornecedor);
        var_dump($preco);
        var_dump($dataCompra);
        var_dump($dataPagamento);

        if (($idFornecedor && $preco && $dataCompra && $dataPagamento)) {
            $obj->setIdFornecedor($idFornecedor);
            $obj->setPreco($preco);
            $obj->setDataCompra($dataCompra);
            $obj->setDataPagamento($dataPagamento);

            if ($dao->inclui($obj)) {
                echo '<h1>Notinha cadastrada com sucesso!</h1>';
                echo '<br><a href="../../index.php">Inicio</a>';
                echo '<br><a href="listagem.php"> Listagem de Notinhas </a><br>';
            } else {
                echo 'Deu alguma merda...';
            }
        } else {
            echo 'Dados ausentes ou incorretos!';
        }
    ?>
</body>
</html>