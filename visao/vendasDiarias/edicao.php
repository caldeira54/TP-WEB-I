<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Edição de Vendas Diárias</title>
</head>
<?php
include('../../verificaLogin.php');
?>
<body class="body">
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
                echo '<script>
                        alert("Venda editada com sucesso!");
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