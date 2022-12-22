<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Exclui Estoque</title>
</head>
<?php
include('../../verificaLogin.php');
?>
<body class="body">
    <?php
        require_once '../../dao/DAOEstoque.php';
        require_once '../../dao/Conexao.php';
        require_once '../../modelo/Estoque.php';

        $obj = new Estoque();
        $dao = new DAOEstoque();

        $id = filter_input(INPUT_GET, 'idEstoque');

        $obj->setIdEstoque($id);

        if($dao->exclui($obj)){
            echo '<script>
                    alert("Produto apagado do estoque com sucesso");
                    window.location.href = "./listagem.php";
                  </script>';
        } else {
            echo 'Deu alguma merda...';
        }
    ?>
</body>
</html>