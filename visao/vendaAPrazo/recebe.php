<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Rceber conta</title>
</head>
<?php
include('../../verificaLogin.php');
?>
<body class="body">
    <?php
        require_once '../../dao/DAOVendaAPrazo.php';
        require_once '../../dao/Conexao.php';
        require_once '../../modelo/VendaAPrazo.php';
 
        $obj = new VendaAPrazo();
        $dao = new DAOVendaAPrazo();

        $ativa = filter_input(INPUT_POST, 'ativa');

        if ($ativa) {
            if ($dao->recebe($ativa)) {
                echo '<script>
                        alert("Conta recebida com sucesso!");
                        document.location.href = "./listagem.php";
                      </script>';
            } else {
                echo 'Deu alguma merda...';
            }
        } else {
            echo '<script>
                    alert("Dados ausentes ou incorretos!");
                    document.location.href = "./listagem.php";
                  </script>';
        }
    ?>
</body>
</html>