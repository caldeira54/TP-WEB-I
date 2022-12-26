<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Exclui Fornecedor</title>
</head>
<?php
include('../../verificaLogin.php');
?>

<body class="body">
    <?php
    require_once '../../dao/DAOFornecedor.php';
    require_once '../../dao/Conexao.php';
    require_once '../../modelo/Fornecedor.php';

    $obj = new Fornecedor();
    $dao = new DAOFornecedor();

    $id = filter_input(INPUT_POST, 'idFornecedor');
    $checado = filter_input(INPUT_POST, 'checado');

    $obj->setIdFornecedor($id);

    if ($checado) {
        try {
            if ($dao->exclui($obj)) {
                echo '<script>
                        alert("Fornecedor apagado com sucesso");
                        window.location.href = "./listagem.php";
                      </script>';
            } else {
                echo '<script>
                        alert("Deu merda...");
                      </script>';
            }
        } catch (Exception $e) {
            echo '<script>
                    alert("Não foi possível apagar o fornecedor!");
                    window.location.href = "./listagem.php";
                  </script>';
        }
    } else {
        echo '<script>
                alert("Deu merda...");
              </script>';
    }

    ?>
</body>

</html>