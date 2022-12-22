<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Exclusão de Nota Promissória</title>
</head>
<?php
include('../../verificaLogin.php');
?>
<body class="body">
    <?php
        require_once '../../dao/DAONotaPromissoria.php';
        require_once '../../dao/Conexao.php';
        require_once '../../modelo/NotaPromissoria.php';

        $obj = new NotaPromissoria();
        $dao = new DAONotaPromissoria();

        $id = filter_input(INPUT_GET, 'idNotaPromissoria');

        $obj->setIdNotaPromissoria($id);

        if($dao->exclui($obj)){
            echo '<script>
                    alert("Notinha apagada com sucesso");
                    window.location.href = "./listagem.php";
                  </script>';
        } else {
            echo '<script>
                    alert("Não foi possível excluir!");
                    window.location.href = "./listagem.php";
                  </script>';
        }
    ?>
</body>
</html>