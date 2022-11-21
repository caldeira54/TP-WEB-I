<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cores.js"></link>
    <title>Lista de Fornecedores</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <h1 style="background-color: colors('preto'); margin-left: 40px"> ****** Lista de Fornecedores ****** </h1>
    <table style="width: 600px; border-collapse: collapse">
        <tr> 
            <th> ID </th>
            <th> Nome </th>
            <th> Endereço </th>
            <th> Excluir </th>
            <th> Editar </th>
        </tr>

        <?php
            require_once '../../dao/DAOFornecedor.php';
            require_once '../../dao/Conexao.php';

            $dao = new DAOFornecedor();
            $lista = $dao->lista();

            foreach($lista as $v)
            {
                echo '<tr>';

                    echo '<td>' . $v['idFornecedor'] . '</td>';
                    echo '<td>' . $v['nome'] . '</td>';
                    echo '<td>' . $v['endereco'] . '</td>';
                    echo '<td> <a id = "excluir" href="exclui.php?idFornecedor=' . $v['idFornecedor'] . '"><img src="../css/imagens/apagar.png"/></a></td>';
                    echo '<td> <a id = "editar" href="formEdicao.php?idFornecedor=' . $v['idFornecedor'] . '"><img src="../css/imagens/editar.png"/></a></td>';

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