<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pordutos</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body class="body">
    <div class="tabela">
    <h1> Produtos </h1>
    <table>
        <tr> 
            <th> ID Produto </th>
            <th> Produto </th>
            <th> Funcionário </th>
            <th> Preço </th>
            <th> Excluir </th>
            <th> Editar </th>
        </tr>

        <?php
            require_once '../../dao/DAOProduto.php';
            require_once '../../dao/Conexao.php';

            $dao = new DAOProduto();
            $lista = $dao->lista();

            foreach($lista as $v)
            {
                echo '<tr>';

                    echo '<td>' . $v['idEstoque'] . '</td>';
                    echo '<td>' . $v['estoque'] . '</td>';
                    echo '<td>' . $v['funcionario'] . '</td>';
                    echo '<td>' . $v['preco'] . '</td>';
                    echo '<td> <a id = "excluir" href="exclui.php?idEstoque=' . $v['idEstoque'] . '"><img src="../css/imagens/apagar.png"/></a></td>';
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
        <button> Cadastro </button>
    </form>
    </div>
    
</body>
</html>