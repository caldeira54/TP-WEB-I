<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cores.js">
    </link>
    <title>Lista de Vendas</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<?php
include('../../verificaLogin.php');
?>
<body class="body">
    <div class="tabela">
        <h1> Vendas à Prazo Inativas </h1>
        <table>
            <tr>
                <th> ID Venda </th>
                <th> Cliente </th>
                <th> Valor </th>
                <th> Data Inicial </th>
                <th> Data Final </th>
            </tr>

            <?php
            require_once '../../dao/DAOVendaAPrazo.php';
            require_once '../../dao/Conexao.php';

            $dao = new DAOVendaAPrazo();
            $lista = $dao->listaVendasInativas();

            foreach ($lista as $v) {
                echo '<tr>';

                echo '<td>' . $v['idVendaAPrazo'] . '</td>';
                echo '<td>' . $v['cliente'] . '</td>';
                echo '<td>' . $v['valor'] . '</td>';
                echo '<td>' . $v['dataInicial'] . '</td>';
                echo '<td>' . $v['dataFinal'] . '</td>';

                echo '</tr>';
            }
            ?>

        </table>
    </div>

    <div class="botoes">
        <form action="../formPrincipal.php">
            <button> Início </button>
        </form>

        <form action="./listagem.php">
            <button> Ativas </button>
        </form>
    </div>
</body>

</html>