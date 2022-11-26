<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição das Vendas Diárias</title>
</head>
<body>
    <?php
       require_once '../../dao/DAOVendaAPrazo.php';
       require_once '../../dao/Conexao.php';
       require_once '../../modelo/VendaAPrazo.php';

        $obj = new VendaAPrazo();
        $dao = new DAOVendaAPrazo();

        $id = filter_input(INPUT_POST, 'idVendaAPrazo');
        $cliente = filter_input(INPUT_POST, 'cliente');
        $valor = filter_input(INPUT_POST, 'valor');
        $dataInicial = filter_input(INPUT_POST, 'dataInicial');
        $dataFinal = filter_input(INPUT_POST, 'dataFinal');

        var_dump($id);
        var_dump($cliente);
        var_dump($valor);
        var_dump($dataInicial);
        var_dump($dataFinal);

        if (($id && $cliente && $valor && $dataInicial && $dataFinal)) {
            $obj->setIdVendaAPrazo($id);
            $obj->setCliente($cliente);
            $obj->setValor($valor);
            $obj->setDataInicial($dataInicial);
            $obj->setDataFinal($dataFinal);

            if ($dao->altera($obj)) {
                echo '<br>Venda editada com sucesso!';
                echo '<br><a href="./listagem.php">Listagm</a>';
                echo '<br><a href="../formPrincipal.php">Início</a>';
                // session_start();
                // $_SESSION['ultimaCompra'] = $id;
                // header("Location: ../produtosDaVendaAPrazo/formCadastro.php");
            } else {
                echo 'Deu alguma merda...';
            }
        } else {
            echo 'Dados ausentes ou incorretos!';
        }
    ?>
</body>
</html>