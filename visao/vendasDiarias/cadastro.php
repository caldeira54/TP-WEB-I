<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo.css">
    <title>Cadastro de Vendas Diárias</title>
</head>

<body>
    <?php
    require_once '../../dao/DAOVendasDiarias.php';
    require_once '../../dao/Conexao.php';
    require_once '../../modelo/VendasDiarias.php';

    $obj = new VendasDiarias();
    $dao = new DAOVendasDiarias();

    session_start();

    $data = filter_input(INPUT_POST, 'data');
    $valor = filter_input(INPUT_POST, 'valor');

    if (($data && $valor)) {
        $obj->setIdFuncionario($_SESSION['idFuncionario']);
        $obj->setData($data);
        $obj->setValor($valor);

        if ($dao->inclui($obj)) {
            echo '<script>
                    alert("Venda cadastrada com sucesso!");
                    window.location.href = "./formCadastro.php";
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