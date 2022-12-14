<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Lista de Fornecedores</title>
</head>

<body class="body">
    <div class="tabela">
        <h1> Fornecedores </h1>
        <table>
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

            foreach ($lista as $v) {
                echo '<tr>';

                echo '<td>' . $v['idFornecedor'] . '</td>';
                echo '<td>' . $v['nome'] . '</td>';
                echo '<td>' . $v['endereco'] . '</td>';
                echo '<td> <a id = "excluir" href="verificaExclusao.php?idFornecedor=' . $v['idFornecedor'] . '"><img src="../css/imagens/apagar.png"/></a></td>';
                echo '<td> <a id = "editar" href="formEdicao.php?idFornecedor=' . $v['idFornecedor'] . '"><img src="../css/imagens/editar.png"/></a></td>';

                echo '</tr>';
            }
            ?>

        </table>

        <div class="botoes">
            <form action="../formPrincipal.php">
                <button> Início </button>
            </form>

            <form action="./formCadastro.php">
                <button> Cadastrar </button>
            </form>
        </div>
    </div>

</body>

</html>