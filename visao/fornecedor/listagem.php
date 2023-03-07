<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../css/estilo.css"> -->
    <link rel="stylesheet" href="../../sass/main.css">
    <link rel="stylesheet" href="../estilo.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <title>Lista de Fornecedores</title>
</head>
<?php
include('../../verificaLogin.php');
include('../menu.php');
?>

<body class="body">
    <div class="container-fluid text-center" style="width: 60rem;">
        <div class="card">
            <h1 class="card-header text-center"> Fornecedores </h1>
            <table class="table">
                <tr>
                    <th> ID </th>
                    <th> Nome </th>
                    <th> Endereço </th>
                    <th> Excluir </th>
                    <th> Editar </th>
                </tr>

                <?php
                require_once '../../dao/DAOFornecedor.php';
                require_once '../../dao/Conexao.php';

                $dao = new DAOFornecedor();
                $lista = $dao->lista();

                foreach ($lista as $v) {
                    echo '<tr>';

                    echo '<td>' . $v['idFornecedor'] . '</td>';
                    echo '<td>' . $v['nome'] . '</td>';
                    echo '<td>' . $v['endereco'] . '</td>';
                    echo '<td> <form action="./verificaExclusao.php" method="POST"> <input name="idFornecedor" type="hidden" value="' . $v['idFornecedor'] . '"/> <button class="btn"> <img class="img-fluid" src="../css/imagens/apagar.png"/> </button> </form></td>';
                    echo '<td> <form action="./formEdicao.php" method="POST"> <input name="idFornecedor" type="hidden" value="' . $v['idFornecedor'] . '"/> <button class="btn"> <img class="img-fluid" src="../css/imagens/editar.png"/> </button> </form></td>';

                    echo '</tr>';
                }
                ?>

            </table>

            <div class="row justify-content-md-center mb-4">
                <form action="../formPrincipal.php" class="col-5 text-center">
                    <button class="btn btn-outline-dark"> Início </button>
                </form>

                <form action="./formCadastro.php" class="col-5 text-center">
                    <button class="btn btn-outline-dark"> Cadastrar </button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../script.js"></script>
</body>

</html>