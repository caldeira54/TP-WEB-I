<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Cadastro dos Produtos da Venda à Vista</title>
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

        if ($dao->inclui($obj)) {
            $dao->atualizaEstoque($idEstoque, $quantidade);
            echo '<div class="popup-wrapper">
                    <div class="popup">
                        <div class="popup-close">x</div>
                        <div class="popup-content">
                            <p>Produto cadastrado com sucesso!</p>
                            <a class="popup-link" href="./formCadastro.php">Adicionar produto</a>
                        </div>
                    </div>
                  </div>';
        } else {
            echo 'Deu alguma merda...';
        }
    } else {
        echo '<script>
                alert("Dados ausentes ou incorretos!");
                window.location.href = "./formCadastro.php";
              </script>';
    }
    ?>
</body>
<script src="./popup.js"></script>

</html>