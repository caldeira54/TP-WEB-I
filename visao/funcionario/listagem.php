<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Funcionários</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<?php
include('../../verificaLogin.php');
?>
<body class="body">
    <h1 style="background-color: colors('preto'); margin-left: 40px"> ****** Lista de Funcionários ****** </h1>
    <table style="width: 600px; border-collapse: collapse">
        <tr> 
            <th> ID Funcionário </th>
            <th> Nome </th>
            <th> Usuário </th>
            <th> Senha </th>
            <th> Excluir </th>
            <th> Editar </th>
        </tr>

        <?php
            require_once '../../dao/DAOFuncionario.php';
            require_once '../../dao/Conexao.php';

            $dao = new DAOFuncionario();
            $lista = $dao->lista();

            foreach($lista as $v)
            {
                echo '<tr>';

                    echo '<td>' . $v['idFuncionario'] . '</td>';
                    echo '<td>' . $v['nome'] . '</td>';
                    echo '<td>' . $v['usuario'] . '</td>';
                    echo '<td>' . $v['senha'] . '</td>';
                    echo '<td> <a id = "excluir" href="exclui.php?idFuncionario=' . $v['idFuncionario'] . '"><img src="../css/imagens/apagar.png"/></a></td>';
                    echo '<td> <a id = "editar" href="formEdicao.php?idFuncionario=' . $v['idFuncionario'] . '"><img src="../css/imagens/editar.png"/></a></td>';

                echo '</tr>';
            }
        ?>

    </table>
    
    <br>

    <form action="../formPrincipal.php">
        <button> Início </button>
    </form>
</body>
</html>