<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Formulário de cadastro de Venda à Vista</title>
</head>
<body>
    <script src="../../mascaras/mascaraData.js">

    </script>
    <form action="cadastro.php" method="post">
        <label for="cliente">Cliente</label>
        <input type="text" name="cliente" id="cliente">

        <br>
        <label for="valor">Valor Total</label>
        <input type="text" name="valor" id="valor">

        <br>

        <label for="dataInicial">Data Inicial</label>
        <input readonly type="text" name="dataInicial" id="dataInicial" value="<?php $hoje = date('d/m/Y'); echo $hoje; ?>">

        <br>

        <label for="dataFinal">Data Final</label>
        <input oninput="mascaraData(this)" type="text" name="dataFinal" id="dataFinal">

        <br>

        <button style=" margin-left: 90px ">Salvar</button>
    </form>

    <form action="../formPrincipal.php">
        <button> Início </button>
    </form>
</body>
</html>