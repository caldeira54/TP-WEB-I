<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar produto na venda</title>
</head>

<body>
    <?php
    require_once '../../dao/DAOVendaAVista.php';
    require_once '../../dao/Conexao.php';
    require_once '../../dao/DAOVendaAVista.php';

    $obj = new VendaAVista();
    $dao = new DAOVendaAVista();

    $id = filter_input(INPUT_POST, 'idVendaAVista');
    $idEstoque = filter_input(INPUT_POST, 'idEstoque');
    $valor = filter_input(INPUT_POST, 'valor');
    $data = filter_input(INPUT_POST, 'data');

    if ($id && $idEstoque && $valor && $data) {
        $obj->setIdEstoque($idEstoque);
        $obj->setValor($valor);
        $obj->setData($data);

        if ($dao->inclui($obj)) {
            echo '<h1>Venda cadastrada com sucesso!</h1>';
            echo '<br><a href="../../index.php">Inicio</a>';
            echo '<br><a href="listagem.php"> Listagem de Vendas </a><br>';
        } else {
            echo 'Deu alguma merda...';
        }
    }
    ?>
</body>

</html>