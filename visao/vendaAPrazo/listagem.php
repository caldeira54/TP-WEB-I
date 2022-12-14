<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </link>
    <title>Lista de Vendas</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<?php
include('../../verificaLogin.php');
?>
<body class="body">
    <div class="tabela">
        <h1> Vendas à Prazo </h1>
        <table>
            <tr>
                <th> ID Venda </th>
                <th> Cliente </th>
                <th> Valor </th>
                <th> Data Inicial </th>
                <th> Data Final </th>
                <th> Editar </th>
                <th> Receber </th>
                <th> Lista </th>
            </tr>

            <?php
            require_once '../../dao/DAOVendaAPrazo.php';
            require_once '../../dao/Conexao.php';

            $dao = new DAOVendaAPrazo();
            $lista = $dao->listaVendasAtivas();

            foreach ($lista as $v) {
                echo '<tr>';

                echo '<td>' . $v['idVendaAPrazo'] . '</td>';
                echo '<td>' . $v['cliente'] . '</td>';
                echo '<td>' . $v['valor'] . '</td>';
                echo '<td>' . $v['dataInicial'] . '</td>';
                echo '<td>' . $v['dataFinal'] . '</td>';
                echo '<td> <form action="./formEdicao.php" method="POST"> <input name="idVendaAPrazo" type="hidden" value="' . $v['idVendaAPrazo'] . '"/> <button class="botoesTd"> <img src="../css/imagens/editar.png"/> </button> </form></td>';
                echo '<td> <form action="./recebe.php" method="POST"> <input name="ativa" type="hidden" value="' . $v['idVendaAPrazo'] . '"/> <button class="botoesTd"> <img src="../css/imagens/receber.png"/> </button> </form></td>';
                echo '<td> <form action="../produtosDaVendaAPrazo/listagem.php" method="POST"> <input name="idVendaAPrazo" type="hidden" value="' . $v['idVendaAPrazo'] . '"/> <button class="botoesTd"> <img src="../css/imagens/lista.png"/> </button> </form></td>';

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