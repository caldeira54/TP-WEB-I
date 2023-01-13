<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Formulário de cadastro de Venda à Vista</title>
</head>
<?php
include('../../verificaLogin.php');
?>
<body class="body">
    <script src="../../mascaras/mascaraData.js">

    </script>
    <h1> Cadastro de Venda </h1>
    <div class="cadastro">
        <form action="cadastro.php" method="post">
            <label for="valor">Valor total</label>
            <input class="dados" type="text" name="valor" id="valor">

            <br>

            <label for="data">Data</label>
            <input class="dados" readonly type="text" name="data" id="data" value="<?php $hoje = date('d/m/Y');
                                                                        echo $hoje; ?>">

            <br>

            <button class="btnSalvar">Salvar</button>
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