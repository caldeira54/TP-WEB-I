<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Cadastro de Produto</title>
</head>

<body class="body">
    <?php
    require_once '../../dao/DAOProduto.php';
    require_once '../../dao/Conexao.php';
    require_once '../../modelo/Produto.php';

    session_start();

    $obj = new Produto();
    $dao = new DAOProduto();

    $idEstoque = filter_input(INPUT_POST, 'idEstoque');
    $preco = filter_input(INPUT_POST, 'preco');

    if (($idEstoque && $preco)) {
        $obj->setIdEstoque($idEstoque);
        $obj->setIdFuncionario($_SESSION['idFuncionario']);
        $obj->setPreco($preco);

        if ($dao->inclui($obj)) {
            echo '<script>
                    alert("Produto cadastrado com sucesso!");
                    window.location.href = "./formCadastro.php";
                  </script>';
        } else {
            echo 'Deu alguma merda...';
        }
    } else {
        echo '<script>
                alert("Dados ausentes ou incorretos");
                window.location.href = "./formCadastro.php";
              </script>';
    }
    ?>
</body>

</html>