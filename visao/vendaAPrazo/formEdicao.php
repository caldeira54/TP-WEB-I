<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Formulário de edição de Venda à Vista</title>
</head>
<?php
include('../../verificaLogin.php');
?>
<body class="body">
    <script src="../../mascaras/mascaraData.js">

    </script>
    <?php
    require_once '../../dao/DAOVendaAPrazo.php';
    require_once '../../dao/Conexao.php';
    require_once '../../modelo/VendaAPrazo.php';

    $id = filter_input(INPUT_POST, 'idVendaAPrazo');

    $dao = new DAOVendaAPrazo();
    $lista = $dao->localiza($id);

    $vendaAPrazo = $lista[0];
    ?>

    <div class="cadastro">
        <h1> Edição da Venda à Prazo </h1>
        <form action="edicao.php" method="post">
            <input type="hidden" name="idVendaAPrazo" id="idVendaAPrazo" value="<?= $vendaAPrazo['idVendaAPrazo'] ?>">

            <label for="cliente">Cliente</label>
            <input class="dados" type="text" name="cliente" id="cliente" value="<?= $vendaAPrazo['cliente'] ?>">

            <br>

            <label for="valor">Preço</label>
            <input class="dados" type="text" name="valor" id="valor" value="<?= $vendaAPrazo['valor'] ?>">

            <br>

            <label for="dataInicial">Data Inicial</label>
            <input readonly class="dados" oninput="mascaraData(this)" type="text" name="dataInicial" value="<?= $vendaAPrazo['dataInicial'] ?>">

            <br>

            <label for="dataFinal">Data Final</label>
            <input class="dados" oninput="mascaraData(this)" type="text" name="dataFinal" value="<?= $vendaAPrazo['dataFinal'] ?>">

            <br>

            <button class="btnSalvar"> Salvar </button>
        </form>

        <form action="../formPrincipal.php">
            <button class="btnInicio"> Início </button>
        </form>

        <form action="./listagem.php">
            <button> Ativas </button>
        </form>
    </div>
</body>

</html>