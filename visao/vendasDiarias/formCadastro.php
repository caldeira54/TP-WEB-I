<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro das Vendas Diárias</title>
</head>
<body>
    <script src="../../mascaras/mascaraData.js">
        
    </script>

    <form action="cadastro.php" method="post">
        <label for="idFuncionario">Funcionário</label>
        <input type="text" name="idFuncionario" id="idFuncionario">

        <br>

        <label for="data">Data</label>
        <input readonly type="text" name="data" id="data" value="<?php $hoje = date('d/m/Y'); echo $hoje; ?>">

        <br>

        <label for="valor">Valor</label>
        <input type="text" name="valor" id="valor">

        <br>

        <button style=" margin-left: 90px ">Salvar</button>
    </form>

    <form action="../formPrincipal.php">
        <button> Início </button>
    </form>
</body>
</html>