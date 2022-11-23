<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cores.js"></link>
    <title>Lista de Vendas</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <h1 style="background-color: colors('preto'); margin-left: 40px"> ****** Lista de Vendas à Prazo ****** </h1>
    <table style="width: 600px; border-collapse: collapse">
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

            foreach($lista as $v)
            {
                echo '<tr>';

                    echo '<td>' . $v['idVendaAPrazo'] . '</td>';
                    echo '<td>' . $v['cliente'] . '</td>';
                    echo '<td>' . $v['valor'] . '</td>';
                    echo '<td>' . $v['dataInicial'] . '</td>';
                    echo '<td>' . $v['dataFinal'] . '</td>';
                    echo '<td> <a id = "listar" href="../produtosDaVendaAPrazo/formEdicao.php?idVendaAPrazo=' . $v['idVendaAPrazo'] . '"><img src="../css/imagens/editar.png"/></a></td>';
                    echo '<td> <form action="./recebe.php" method="POST"> <input name="ativa" type="hidden" value="' . $v['idVendaAPrazo'] . '"/> <button> <img src="../css/imagens/receber.png"/> </button> </form></td>';
                    echo '<td> <a id = "listar" href="../produtosDaVendaAPrazo/listagem.php?idVendaAPrazo=' . $v['idVendaAPrazo'] . '"><img src="../css/imagens/lista.png"/></a></td>';

                echo '</tr>';
            }
        ?>

    </table>
    
    <br>

    <form action="../formPrincipal.php">
        <button> Início </button>
    </form>
</body>
</html>