<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro das Vendas Diárias</title>
</head>
<body>
    <?php
        require_once '../../dao/DAOVendaAVista.php';
        require_once '../../dao/Conexao.php';
        require_once '../../modelo/VendaAVista.php';

        $obj = new VendaAVista();
        $dao = new DAOVendaAVista();

        $idEstoque = filter_input(INPUT_POST, 'idEstoque');
        $valor = filter_input(INPUT_POST, 'valor');
        $data = filter_input(INPUT_POST, 'data');

        var_dump($idEstoque);
        var_dump($valor);
        var_dump($data);

        if (($idEstoque && $valor && $data)) {
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
        } else {
            echo 'Dados ausentes ou incorretos!';
        }
    ?>
</body>
</html>