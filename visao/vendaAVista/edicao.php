<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Edição das Vendas Diárias</title>
</head>
<?php
include('../../verificaLogin.php');
?>
<body class="body">
    <?php
    require_once '../../dao/DAOVendaAVista.php';
    require_once '../../dao/Conexao.php';
    require_once '../../modelo/VendaAVista.php';

    $obj = new VendaAVista();
    $dao = new DAOVendaAVista();

    $id = filter_input(INPUT_POST, 'idVendaAVista');
    $valor = filter_input(INPUT_POST, 'valor');
    $data = filter_input(INPUT_POST, 'data');

    if (($id && $valor && $data)) {
        $obj->setIdVendaAVista($id);
        $obj->setValor($valor);
        $obj->setData($data);

        if ($dao->altera($obj)) {
            echo '<script>
                    alert("Venda edita com sucesso!");
                  </script>';

            session_start();
            $_SESSION['ultimaCompra'] = $id;
            header("Location: ../produtosDaVenda/formCadastro.php");
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