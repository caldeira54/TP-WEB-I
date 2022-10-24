<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                echo '<h1>Fornecedor cadastrado com sucesso!</h1>';
                echo '<br><a href="../../index.php">Inicio</a>';
                echo '<br><a href="listagem.php"> Listagem de Fornecedores </a><br>';
            } else {
                echo 'Deu alguma merda...';
            }
        } else {
            echo 'Dados ausentes ou incorretos!';
        }
    ?>
</body>
</html>