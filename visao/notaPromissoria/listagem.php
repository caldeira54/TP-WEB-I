<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem das Notas Promissórias</title>

    <style>
        td{
            border: 2px solid #ccc; padding: 5px; text-align: center;
        }
        
        th{
            border: 2px solid #ccc; padding: 5px; text-align: center; background: #ccc;
        }
    </style>
</head>
<body>
    <h1 style="background-color: colors('preto'); margin-left: 40px"> ****** Lista de Notinhas ****** </h1>
    <table style="width: 600px; border-collapse: collapse">
        <tr> 
            <th> ID Notinha</th>
            <th> ID Fornecedor </th>
            <th> Data da Compra </th>
            <th> Data do Pagamento </th>
            <th> Editar <th>
            <th> Excluir </th>
        </tr>

        <?php
            require_once '../../dao/DAONotaPromissoria.php';
            require_once '../../dao/Conexao.php';

            $dao = new DAONotaPromissoria();
            $lista = $dao->lista();

            foreach($lista as $v)
            {
                echo '<tr>';

                    echo '<td>' . $v['idNotaPromissoria'] . '</td>';
                    echo '<td>' . $v['idFornecedor'] . '</td>';
                    echo '<td>' . $v['preco'] . '</td>';
                    echo '<td>' . $v['dataCompra'] . '</td>';
                    echo '<td>' . $v['dataPagamento'] . '</td>';
                    echo '<td> <a id = "excluir" href="exclui.php?idNotaPromissoria=' . $v['idNotaPromissoria'] . '">Excluir</a></td>';
                    echo '<td> <a id = "editar" href="formEdicao.php?idNotaPromissoria=' . $v['idNotaPromissoria'] . '">Editar</a></td>';

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