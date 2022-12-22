<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Cadastro das Vendas Diárias</title>
</head>
<?php
include('../../verificaLogin.php');
?>
<body class="body">
    <?php
    require_once '../../dao/DAOVendaAPrazo.php';
    require_once '../../dao/Conexao.php';
    require_once '../../modelo/VendaAPrazo.php';

    $obj = new VendaAPrazo();
    $dao = new DAOVendaAPrazo();

    $cliente = filter_input(INPUT_POST, 'cliente');
    $valor = filter_input(INPUT_POST, 'valor');
    $dataInicial = filter_input(INPUT_POST, 'dataInicial');
    $dataFinal = filter_input(INPUT_POST, 'dataFinal');

    if (($cliente && $valor && $dataInicial && $dataFinal)) {
        $obj->setCliente($cliente);
        $obj->setValor($valor);
        $obj->setDataInicial($dataInicial);
        $obj->setDataFinal($dataFinal);

        if ($id = $dao->inclui($obj)) {
            session_start();
            $_SESSION['ultimaCompra'] = $id;
            echo '<script>
                    alert("Venda cadastrada com sucesso!");
                    window.location.href = "../produtosDaVendaAPrazo/formCadastro.php";
                  </script>';
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

</html>