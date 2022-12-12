<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Funcionário</title>
</head>
<body class="body">
    <?php
       require_once '../../dao/DAOFuncionario.php';
       require_once '../../dao/Conexao.php';
       require_once '../../modelo/Funcionario.php';

        $obj = new Funcionario();
        $dao = new DAOFuncionario();

        $id = filter_input(INPUT_POST, 'idFuncionario');
        $nome = filter_input(INPUT_POST, 'nome');
        $usuario = filter_input(INPUT_POST, 'usuario');
        $senha = filter_input(INPUT_POST, 'senha');

        if (($id && $nome && $usuario && $senha)) {
            $obj->setIdFuncionario($id);
            $obj->setNome($nome);
            $obj->setUsuario($usuario);
            $obj->setSenha($senha);

            if ($dao->altera($obj)) {
                echo '<h1>Funcionário editado com sucesso!</h1>';
                echo '<br><a href="../../index.php">Inicio</a>';
                echo '<br><a href="listagem.php"> Listagem de Funcionários </a><br>';
            } else {
                echo 'Deu alguma merda...';
            }
        } else {
            echo 'Dados ausentes ou incorretos!';
        }
    ?>
</body>
</html>