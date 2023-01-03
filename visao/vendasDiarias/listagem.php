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
        <h1> Vendas Diárias </h1>
        <table>
            <tr>
                <th> ID Venda </th>
                <th> Funcionário </th>
                <th> Data </th>
                <th> Valor </th>
                <th> Excluir </th>
                <th> Editar </th>
            </tr>

            <?php
            require_once '../../dao/DAOVendasDiarias.php';
            require_once '../../dao/Conexao.php';

            $dao = new DAOVendasDiarias();
            $lista = $dao->lista();

            foreach ($lista as $v) {
                echo '<tr>';

                echo '<td>' . $v['idVendasDiarias'] . '</td>';
                echo '<td>' . $v['nome'] . '</td>';
                echo '<td>' . $v['data'] . '</td>';
                echo '<td>' . $v['valor'] . '</td>';
                echo '<td> <form action="./verificaExclusao.php" method="POST"> <input name="idVendasDiarias" type="hidden" value="' . $v['idVendasDiarias'] . '"/> <button class="botoesTd"> <img src="../css/imagens/apagar.png"/> </button> </form></td>';
                echo '<td> <form action="./formEdicao.php" method="POST"> <input name="idVendasDiarias" type="hidden" value="' . $v['idVendasDiarias'] . '"/> <button class="botoesTd"> <img src="../css/imagens/editar.png"/> </button> </form></td>';

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