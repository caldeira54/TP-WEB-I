<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rceber conta</title>
</head>
<body>
    <?php
        require_once '../../dao/DAOVendaAPrazo.php';
        require_once '../../dao/Conexao.php';
        require_once '../../modelo/VendaAPrazo.php';
 
        $obj = new VendaAPrazo();
        $dao = new DAOVendaAPrazo();

        $ativa = filter_input(INPUT_POST, 'ativa');

        var_dump($ativa);

        if ($ativa) {
            if ($dao->recebe($ativa)) {
                echo '<h1>Venda recebida com sucesso!</h1>';
                echo '<br><a href="../../index.php">Inicio</a>';
                echo '<br><a href="listagem.php"> Listagem das Vendas </a><br>';
            } else {
                echo 'Deu alguma merda...';
            }
        } else {
            echo 'Dados ausentes ou incorretos!';
        }
    ?>
</body>
</html>