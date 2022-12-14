<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Vendas</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<?php
include('../../verificaLogin.php');
?>
<body class="body">
    <div class="tabela">
        <h1> Vendas á Vista </h1>
        <table>
            <tr>
                <th> ID Venda </th>
                <th> Valor </th>
                <th> Data </th>
                <th> Editar </th>
                <th> Lista </th>
            </tr>

            <?php
            require_once '../../dao/DAOVendaAVista.php';
            require_once '../../dao/Conexao.php';

            $dao = new DAOVendaAVista();
            $lista = $dao->lista();

            foreach ($lista as $v) {
                echo '<tr>';

                echo '<td>' . $v['idVendaAVista'] . '</td>';
                echo '<td>' . $v['valorTotal'] . '</td>';
                echo '<td>' . $v['data'] . '</td>';
                echo '<td> <form action="./formEdicao.php" method="POST"> <input name="idVendaAVista" type="hidden" value="' . $v['idVendaAVista'] . '"/> <button class="botoesTd"> <img src="../css/imagens/editar.png"/> </button> </form></td>';
                echo '<td> <form action="../produtosDaVenda/listagem.php" method="POST"> <input name="idVendaAVista" type="hidden" value="' . $v['idVendaAVista'] . '"/> <button class="botoesTd"> <img src="../css/imagens/lista.png"/> </button> </form></td>';

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