<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../estilo.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <title>Formulário de cadastro do Fornecedor</title>
</head>

<?php
include('../../verificaLogin.php');
include('../menu.php');
?>

<body class="body">
    <div class="cadastro">
        <h1>Cadastro de Fornecedores</h1>
        <br>
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
    <script type="text/javascript" src="../script.js"></script>
</body>

</html>