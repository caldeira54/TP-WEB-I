<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Cadastro de Fornecedor</title>
</head>

<body>
    <?php
    require_once '../../dao/DAOFornecedor.php';
    require_once '../../dao/Conexao.php';
    require_once '../../modelo/Fornecedor.php';

    $obj = new Fornecedor();
    $dao = new DAOFornecedor();

    $nome = filter_input(INPUT_POST, 'nome');
    $endereco = filter_input(INPUT_POST, 'endereco');

    if (($nome && $endereco)) {
        $obj->setNome($nome);
        $obj->setEndereco($endereco);

        if ($dao->inclui($obj)) {
            echo '<script>
                    alert("Fornecedor cadastrado com sucesso");
                    window.location.href = "./formCadastro.php";
                  </script>';
        } else {
            echo 'Deu alguma merda...';
        }
    } else {
        echo  '<script>
                alert("Dados ausentes ou incorretos");
                window.location.href = "./formCadastro.php";
               </script>';
    }
    ?>
</body>

</html>