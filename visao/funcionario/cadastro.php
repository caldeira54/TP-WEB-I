<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionário</title>
</head>
<?php
include('../../verificaLogin.php');
?>
<body class="body">
    <?php
        require_once '../../dao/DAOFuncionario.php';
        require_once '../../dao/Conexao.php';
        require_once '../../modelo/Funcionario.php';

        $obj = new Funcionario();
        $dao = new DAOFuncionario();

        $nome = filter_input(INPUT_POST, 'nome');
        $usuario = filter_input(INPUT_POST, 'usuario');
        $senha = filter_input(INPUT_POST, 'senha');

        var_dump($nome);
        var_dump($usuario);
        var_dump($senha);

        if (($nome && $usuario && $senha)) {
            $obj->setNome($nome);
            $obj->setUsuario($usuario);
            $obj->setSenha($senha);

            if ($dao->inclui($obj)) {
                echo '<h1>Funcionário cadastrado com sucesso!</h1>';
                echo '<br><a href="../../index.php">Inicio</a>';
                echo '<br><a href="listagem.php"> Listagem de Funcionarios </a><br>';
            } else {
                echo 'Deu alguma merda...';
            }
        } else {
            echo 'Dados ausentes ou incorretos!';
        }
    ?>
</body>
</html>