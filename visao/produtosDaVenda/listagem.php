<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cores.js">
    </link>
    <title>Lista de Pordutos</title>
    <link rel="stylesheet" href="./estilo.css">
</head>

<body>
    <div class="tabela">
        <h1> Lista de Produtos </h1>
        <table>
            <tr>
                <th> Venda </th>
                <th> Produto </th>
                <th> Quantidade </th>
                <th> Valor </th>
            </tr>

            <?php
            require_once '../../dao/DAOProdutosDaVenda.php';
            require_once '../../dao/Conexao.php';

            $dao = new DAOProdutosDaVenda();
            $id = filter_input(INPUT_GET, 'idVendaAVista');
            $lista = $dao->lista($id);

            foreach ($lista as $v) {
                echo '<tr>';

                echo '<td>' . $v['idVendaAVista'] . '</td>';
                echo '<td>' . $v['nome'] . '</td>';
                echo '<td>' . $v['quantidade'] . '</td>';
                echo '<td>' . $v['valorUnitario'] . '</td>';

                echo '</tr>';
            }
            ?>

        </table>
    </div>

    <div class="botoes">
        <form action="../formPrincipal.php">
            <button> Início </button>
        </form>

        <form action="../vendaAVista/listagem.php">
            <button> Vendas </button>
        </form>
    </div>

</body>

</html>