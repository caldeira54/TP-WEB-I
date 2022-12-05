<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Nota Promissória</title>
</head>
<body>
    <?php
        require_once '../../dao/DAONotaPromissoria.php';
        require_once '../../dao/Conexao.php';
        require_once '../../modelo/NotaPromissoria.php';

        $obj = new NotaPromissoria();
        $dao = new DAONotaPromissoria();

        $ativa = filter_input(INPUT_POST, 'ativa');

        var_dump($ativa);

        if($ativa) {
            if ($dao->paga($ativa)) {
                echo '<h1>Notinha paga com sucesso!</h1>';
                echo '<br><a href="../formPrincipal.php">Inicio</a>';
                echo '<br><a href="listagem.php"> Listagem de Notinhas </a><br>';
            } else {
                echo 'Deu alguma merda...';
            }
        } else {
            echo 'Dados ausentes ou incorretos!';
        }
    ?>
</body>
</html>