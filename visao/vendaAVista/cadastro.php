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

    $valor = filter_input(INPUT_POST, 'valor');
    $data = filter_input(INPUT_POST, 'data');

    if (($valor && $data)) {
        $obj->setValor($valor);
        $obj->setData($data);

        if ($id = $dao->inclui($obj)) {
            session_start();
            $_SESSION['ultimaCompra'] = $id;
            echo '<script>
                    alert("Venda cadastrada com sucesso!");
                    window.location.href = "../produtosDaVenda/formCadastro.php";
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