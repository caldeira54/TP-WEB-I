<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Estoque</title>
</head>
<body>
    <?php
        require_once '../../dao/DAOEstoque.php';
        require_once '../../dao/Conexao.php';
        require_once '../../modelo/Estoque.php';

        $obj = new Estoque();
        $dao = new DAOEstoque();

        $idFornecedor = filter_input(INPUT_POST, 'idFornecedor');
        $nome = filter_input(INPUT_POST, 'nome');
        $preco = filter_input(INPUT_POST, 'preco');
        $quantidade = filter_input(INPUT_POST, 'quantidade');

        if (($idFornecedor && $nome && $preco && $quantidade)) {
            $obj->setIdFornecedor($idFornecedor);
            $obj->setNome($nome);
            $obj->setPreco($preco);
            $obj->setQuantidade($quantidade);

            if ($dao->inclui($obj)) {
                echo '<h1>Estoque cadastrado com sucesso!</h1>';
                echo '<br><a href="../../index.php">Inicio</a>';
                echo '<br><a href="listagem.php"> Listagem do Estoque </a><br>';
            } else {
                echo 'Deu alguma merda...';
            }
        } else {
            echo 'Dados ausentes ou incorretos!';
        }
    ?>
</body>
</html>