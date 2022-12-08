<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo.css">
    <link rel="stylesheet" href="../estilo.css">
    <title>Formulário de cadastro do Fornecedor</title>
</head>

<body>
    <?php
    include('../menu.php');
    ?>
    
    <div class="cadastro">
        <h1>Cadastro de Fornecedores</h1>
        <form action="cadastro.php" method="post">
            <label for="nome">Fornecedor</label>
            <input type="text" name="nome" id="nome">

            <br>

            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco">

            <br>

            <button class="btnSalvar">Salvar</button>
        </form>

        <form action="../formPrincipal.php">
            <button class="btnInicio"> Início </button>
        </form>

        <form action="./listagem.php">
            <button> Listagem </button>
        </form>
    </div>
</body>

</html>