<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Edição de Nota Promissória</title>
</head>

<body>
    <?php
    require_once '../../dao/DAONotaPromissoria.php';
    require_once '../../dao/Conexao.php';
    require_once '../../modelo/NotaPromissoria.php';

    $obj = new NotaPromissoria();
    $dao = new DAONotaPromissoria();

    $id = filter_input(INPUT_POST, 'idNotaPromissoria');
    $idFornecedor = filter_input(INPUT_POST, 'idFornecedor');
    $preco = filter_input(INPUT_POST, 'preco');
    $dataCompra = filter_input(INPUT_POST, 'dataCompra');
    $dataPagamento = filter_input(INPUT_POST, 'dataPagamento');

    if (($id && $idFornecedor && $preco && $dataCompra && $dataPagamento)) {
        $obj->setIdNotaPromissoria($id);
        $obj->setIdFornecedor($idFornecedor);
        $obj->setPreco($preco);
        $obj->setDataCompra($dataCompra);
        $obj->setDataPagamento($dataPagamento);

        if ($dao->altera($obj)) {
            echo '<script>
                    alert("Notinha editada com sucesso!");
                    window.location.href = "./listagem.php";
                  </script>';
        } else {
            echo 'Deu alguma merda...';
        }
    } else {
        echo '<script>
                alert("Dados ausentes ou incorretos!");
                window.location.href = "./listagem.php";
              </script>';
    }
    ?>
</body>

</html>