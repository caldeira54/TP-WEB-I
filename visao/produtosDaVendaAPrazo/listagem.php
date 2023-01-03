<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pordutos</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<?php
include('../../verificaLogin.php');
?>
<body class="body">
    <div class="tabela">
        <h1> Lista de Produtos </h1>
        <table>
            <tr>
                <th> Venda </th>
                <th> Produto </th>
                <th> Quantidade </th>
                <th> Valor </th>
                <th> Adicionar </th>
                <th> Remover </th>
            </tr>

            <?php
            require_once '../../dao/DAOProdutosDaVendaAPrazo.php';
            require_once '../../dao/Conexao.php';

            $dao = new DAOProdutosDaVendaAPrazo();
            $id = filter_input(INPUT_POST, 'idVendaAPrazo');
            $lista = $dao->lista($id);

            foreach ($lista as $v) {
                echo '<tr>';

                echo '<td>' . $v['idVendaAPrazo'] . '</td>';
                echo '<td>' . $v['nome'] . '</td>';
                echo '<td>' . $v['quantidade'] . '</td>';
                echo '<td>' . $v['valor'] . '</td>';
                echo '<td> <form action="./formAdiciona.php" method="POST"> <input name="idVendaAPrazo" type="hidden" value="' . $v['idVendaAPrazo'] . '"/> <button class="botoesTd"> <img src="../css/imagens/adicionar.png"/> </button> </form></td>';
                echo '<td> <form action="./formRemove.php" method="POST"> <input name="idVendaAPrazo" type="hidden" value="' . $v['idVendaAPrazo'] . '"/> <button class="botoesTd"> <img src="../css/imagens/remover.png"/> </button> </form></td>';

                echo '</tr>';
            }
            ?>

        </table>
    </div>

    <div class="botoes">
        <form action="./formCadastroNovo.php">
            <button> Novo Produto </button>
        </form>

        <form action="../formPrincipal.php">
            <button> Início </button>
        </form>

        <form action="../vendaAPrazo/listagem.php">
            <button> Vendas </button>
        </form>
    </div>
</body>

</html>