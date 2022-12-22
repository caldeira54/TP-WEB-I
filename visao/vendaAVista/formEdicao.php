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
    require_once '../../dao/DAOVendaAVista.php';
    require_once '../../dao/Conexao.php';
    require_once '../../modelo/VendaAVista.php';

    $id = filter_input(INPUT_GET, 'idVendaAVista');

    $dao = new DAOVendaAVista();
    $lista = $dao->localiza($id);

    $vendaAVista = $lista[0];
    ?>

    <div class="cadastro">
        <form action="edicao.php" method="post">
            <input type="hidden" name="idVendaAVista" id="idVendaAVista" value="<?= $vendaAVista['idVendaAVista'] ?>">

            <label for="valor">Preço</label>
            <input class="dados" type="text" name="valor" id="valor" value="<?= $vendaAVista['valorTotal'] ?>">

            <br>

            <label for="data">Data</label>
            <input class="dados" oninput="mascaraData(this)" type="text" name="data" value="<?= $vendaAVista['data'] ?>">

            <br>

            <button class="btnSalvar"> Salvar </button>
        </form>

        <form action="../formPrincipal.php">
            <button class="btnInicio"> Início </button>
        </form>

        <form action="./listagem.php">
            <button> Vendas </button>
        </form>
    </div>
</body>

</html>