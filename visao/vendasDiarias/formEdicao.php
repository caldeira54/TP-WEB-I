<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Formulário de edição das Vendas Diárias</title>
</head>

<body class="body">
    <script src="../../mascaras/mascaraData.js">

    </script>

    <?php
    require_once '../../dao/DAOVendasDiarias.php';
    require_once '../../dao/Conexao.php';
    require_once '../../modelo/VendasDiarias.php';

    $id = filter_input(INPUT_GET, 'idVendasDiarias');

    $dao = new DAOVendasDiarias();
    $lista = $dao->localiza($id);

    $vendasDiarias = $lista[0];
    ?>

    <div class="cadastro">
        <h1> Edição de Venda </h1>
        <form action="edicao.php" method="post">
            <input type="hidden" name="idVendasDiarias" id="idVendasDiarias" value="<?= $vendasDiarias['idVendasDiarias'] ?>">
            <input type="hidden" name="idFuncionario" id="idFuncionario" value="<?= $vendasDiarias['idFuncionario'] ?>">

            <label for="data">Data</label>
            <input class="dados" type="text" name="data" id="data" value="<?= $vendasDiarias['data'] ?>">

            <br>

            <label for="valor">Valor</label>
            <input class="dados" type="text" name="valor" value="<?= $vendasDiarias['valor'] ?>">

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