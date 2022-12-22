<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Cadastro de Nota Promissória</title>
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

        $ativa = filter_input(INPUT_POST, 'ativa');

        if($ativa) {
            if ($dao->paga($ativa)) {
                echo '<script>
                        alert("Notinha paga com sucesso!");
                        window.location.href = "./listagem.php";
                      </script>';
            } else {
                echo 'Deu alguma merda...';
            }
        } else {
            echo '<script>
                    alert("Dados ausentes ou incorretos!");
                    window.location.href = "./listagem.php";
                  </script>';
        }
    ?>
</body>
</html>