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
    <h1 style="background-color: colors('preto'); margin-left: 40px"> ****** Lista de Produtos ****** </h1>
    <table style="width: 600px; border-collapse: collapse">
        <tr> 
            <th> ID Venda </th>
            <th> Produto </th>
            <th> Valor </th>
            <th> Data </th>
            <th> Editar </th>
            <th> Adicionar </th>
        </tr>

        <?php
            require_once '../../dao/DAOVendaAVista.php';
            require_once '../../dao/Conexao.php';

            $dao = new DAOVendaAVista();
            $lista = $dao->lista();

            foreach($lista as $v)
            {
                echo '<tr>';

                    echo '<td>' . $v['idVendaAVista'] . '</td>';
                    echo '<td>' . $v['idEstoque'] . '</td>';
                    echo '<td>' . $v['valor'] . '</td>';
                    echo '<td>' . $v['data'] . '</td>';
                    echo '<td> <a id = "editar" href="formEdicao.php?idVendaAVista=' . $v['idVendaAVista'] . '"><img src="../css/imagens/editar.png"/></a></td>';
                    echo '<td> <a id = "adicionar" href="formAdicionar.php?idVendaAVista=' . $v['idVendaAVista'] . '"><img src="../css/imagens/adicionar.png"/></a></td>';

                echo '</tr>';
            }
        ?>

    </table>
    
    <br>

    <form action="../../index.php">
        <button> Início </button>
    </form>
</body>
</html>