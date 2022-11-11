<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Produto</title>
</head>
<body>
    <?php
       require_once '../../dao/DAOProduto.php';
       require_once '../../dao/Conexao.php';
       require_once '../../modelo/Produto.php';

        $obj = new Produto();
        $dao = new DAOProduto();

        $id = filter_input(INPUT_POST, 'idEstoque');
        $idFuncionario = filter_input(INPUT_POST, 'idFuncionario');
        $preco = filter_input(INPUT_POST, 'preco');

        var_dump($idEstoque);
        var_dump($idFuncionario);
        var_dump($preco);

        if (($id && $idFuncionario && $preco)) {
            $obj->setIdEstoque($id);
            $obj->setIdFuncionario($idFuncionario);
            $obj->setPreco($preco);

            if ($dao->altera($obj)) {
                echo '<h1>Produto editado com sucesso!</h1>';
                echo '<br><a href="../../index.php">Inicio</a>';
                echo '<br><a href="listagem.php"> Listagem de Produtos </a><br>';
            } else {
                echo 'Deu alguma merda...';
            }
        } else {
            echo 'Dados ausentes ou incorretos!';
        }
    ?>
</body>
</html>