<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo.css">
    <title>Cadastro dos Produtos da Venda à Prazo</title>
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

    if (($idEstoque && $idVendaAPrazo && $quantidade && $valor)) {
        $obj->setIdEstoque($idEstoque);
        $obj->setIdVendaAPrazo($idVendaAPrazo);
        $obj->setQuantidade($quantidade);
        $obj->setValor($valor);

        if ($dao->inclui($obj)) {
            $dao->adicionaProutos($obj);
            $dao->baixaEstoque($idEstoque, $quantidade);
            echo '<script>
                    alert("Novo produto adicionado na venda com sucesso!");
                    window.location.href = "./formCadastroNovo.php";
                  </script>';
        } else {
            echo 'Deu alguma merda...';
        }
    } else {
        echo '<script>
                alert("Dados ausentes ou incorretos!");
                window.location.href = "./formCadastroNovo.php";
              </script>';
    }
    ?>
</body>
</html>