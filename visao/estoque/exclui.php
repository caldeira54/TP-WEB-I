<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclui Estoque</title>
</head>
<body>
    <?php
        require_once '../../dao/DAOEstoque.php';
        require_once '../../dao/Conexao.php';
        require_once '../../modelo/Estoque.php';

        $obj = new Estoque();
        $dao = new DAOEstoque();

        $id = filter_input(INPUT_GET, 'idEstoque');

        $obj->setIdEstoque($id);

        if($dao->exclui($obj)){
            echo '<h1>Estoque excluído com sucesso</h1>';
            echo '<br><a href="../../index.php">Inicio</a>';
            echo '<br><a href="listagem.php"> Listagem do Estoque </a><br>';
        } else {
            echo 'Deu alguma merda...';
        }
    ?>
</body>
</html>