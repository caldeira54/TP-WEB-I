<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Fornecedores</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<?php
include('../../verificaLogin.php');
?>
<body class="body">
    <div class="tabela">
        <h1> Estoque </h1>
        <table>
            <tr>
                <th> ID Estoque </th>
                <th> Fornecedor </th>
                <th> Nome </th>
                <th> Preço </th>
                <th> Quantidade </th>
                <th> Excluir </th>
                <th> Editar </th>
            </tr>

            <?php
            require_once '../../dao/DAOEstoque.php';
            require_once '../../dao/Conexao.php';

            $dao = new DAOEstoque();
            $lista = $dao->lista();

            foreach ($lista as $v) {
                echo '<tr>';

                echo '<td>' . $v['idEstoque'] . '</td>';
                echo '<td>' . $v['fornecedor'] . '</td>';
                echo '<td>' . $v['nome'] . '</td>';
                echo '<td>' . $v['preco'] . '</td>';
                echo '<td>' . $v['quantidade'] . '</td>';
                echo '<td> <form action="./verificaExclusao.php" method="POST"> <input name="idEstoque" type="hidden" value="' . $v['idEstoque'] . '"/> <button class="botoesTd"> <img src="../css/imagens/apagar.png"/> </button> </form></td>';
                echo '<td> <a id = "editar" href="formEdicao.php?idEstoque=' . $v['idEstoque'] . '"><img src="../css/imagens/editar.png"/></a></td>';

                echo '</tr>';
            }
            ?>

        </table>
    </div>

    <div class="botoes">
        <form action="../formPrincipal.php">
            <button> Início </button>
        </form>

        <form action="./formCadastro.php">
            <button> Cadastrar </button>
        </form>
    </div>

</body>

</html>