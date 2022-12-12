<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Edição de Vendas à Prazo</title>
</head>
<body class="body">
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

        if (($idEstoque && $idVendaAPrazo && $quantidade && $valor)) {
            $obj->setIdEstoque($idEstoque);
            $obj->setIdVendaAPrazo($idVendaAPrazo);
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
            echo '<script>
                    alert("Dados ausentes ou incorretos!");
                    window.location.href = "../vendaAPrazo/listagem.php";
                  </script>';
        }
    ?>
</body>
</html>