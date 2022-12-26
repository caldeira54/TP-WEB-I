<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Adiona produtos na venda</title>
</head>
<?php
include('../../verificaLogin.php');
?>
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

            try {
                $dao->adicionaProutos($obj);
                $dao->baixaEstoque($idEstoque, $quantidade);
                echo '<script>
                        alert("Produto adicionado com sucesso!");
                        window.location.href = "../vendaAPrazo/listagem.php";
                      </script>';
            } catch(Exception $e) {
                echo '<script>
                        alert("Produto já existente na venda!");
                        window.location.href = "../vendaAPrazo/listagem.php";
                      </script>';
            }
        } else {
            echo '<script>
                    alert("Dados ausentes ou incorretos!");
                    window.location.href = "../vendaAPrazo/listagem.php";
                  </script>';
        }
    ?>
</body>
<script src="./popup.js"></script>
</html>