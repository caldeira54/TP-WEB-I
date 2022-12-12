<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem das Notas Promissórias</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body class="body">
    <div class="tabela">
        <h1> Notinhas Ativas </h1>
        <table>
            <tr>
                <th> ID Notinha</th>
                <th> Fornecedor </th>
                <th> Preço </th>
                <th> Data da Compra </th>
                <th> Data do Pagamento </th>
                <th> Pagar </th>
                <th> Excluir </th>
                <th> Editar </th>
            </tr>

            <?php
            require_once '../../dao/DAONotaPromissoria.php';
            require_once '../../dao/DAOFornecedor.php';
            require_once '../../dao/Conexao.php';

            $dao = new DAONotaPromissoria();
            $lista = $dao->listaAtivas();

            $daoFornecedor = new DAOFornecedor();
            $listaFornecedor = $daoFornecedor->lista();

            foreach ($lista as $v) {
                echo '<tr>';

                echo '<td>' . $v['idNotaPromissoria'] . '</td>';
                echo '<td>' . $v['nome'] . '</td>';
                echo '<td>' . $v['preco'] . '</td>';
                echo '<td>' . $v['dataCompra'] . '</td>';
                echo '<td>' . $v['dataPagamento'] . '</td>';
                echo '<td> <form action="./paga.php" method="POST"> <input name="ativa" type="hidden" value="' . $v['idNotaPromissoria'] . '"/> <button class="pagar"> <img src="../css/imagens/pagar.png"/> </button> </form></td>';
                echo '<td> <a id = "excluir" href="exclui.php?idNotaPromissoria=' . $v['idNotaPromissoria'] . '"><img src="../css/imagens/apagar.png"/></a></td>';
                echo '<td> <a id = "editar" href="formEdicao.php?idNotaPromissoria=' . $v['idNotaPromissoria'] . '"><img src="../css/imagens/editar.png"/></a></td>';

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

        <form action="./listagemInativas.php">
            <button> Inativas </button>
        </form>
    </div>
</body>

</html>