<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Formulário de cadastro das Vendas Diárias</title>
</head>

<body>
    <script src="../../mascaras/mascaraData.js">

    </script>

    <?php
    session_start();
    ?>

    <div class="cadastro">
        <h1>Cadastro de Venda Diária</h1>
        <form action="cadastro.php" method="post">
            <label for="idFuncionario">Funcionário</label>
            <input readonly class="dados" type="text" name="idFuncionario" id="idFuncionario" value="<?php echo $_SESSION['nome'] ?>">

            <br>

            <label for="data">Data</label>
            <input class="dados" readonly type="text" name="data" id="data" value="<?php $hoje = date('d/m/Y');
                                                                        echo $hoje; ?>">

            <br>

            <label for="valor">Valor</label>
            <input class="dados" type="text" name="valor" id="valor">

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