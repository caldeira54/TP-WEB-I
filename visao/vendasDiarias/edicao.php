<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Vendas Diárias</title>
</head>
<body>
    <?php
       require_once '../../dao/DAOVendasDiarias.php';
       require_once '../../dao/Conexao.php';
       require_once '../../modelo/VendasDiarias.php';

        $obj = new VendasDiarias();
        $dao = new DAOVendasDiarias();

        $id = filter_input(INPUT_POST, 'idVendasDiarias');
        $idFuncionario = filter_input(INPUT_POST, 'idFuncionario');
        $data = filter_input(INPUT_POST, 'data');
        $valor = filter_input(INPUT_POST, 'valor');

        if (($id && $idFuncionario && $data && $valor)) {
            $obj->setIdVendasDiarias($id);
            $obj->setIdFuncionario($idFuncionario);
            $obj->setData($data);
            $obj->setValor($valor);

            if ($dao->altera($obj)) {
                echo '<h1>Venda diária editada com sucesso!</h1>';
                echo '<br><a href="../../index.php">Inicio</a>';
                echo '<br><a href="listagem.php"> Listagem de Vendas Diárias </a><br>';
            } else {
                echo 'Deu alguma merda...';
            }
        } else {
            echo 'Dados ausentes ou incorretos!';
        }
    ?>
</body>
</html>