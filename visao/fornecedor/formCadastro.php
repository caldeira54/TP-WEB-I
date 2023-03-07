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
    <title>Formulário de cadastro do Fornecedor</title>
</head>

<?php
include('../../verificaLogin.php');
include('../menu.php');
?>

<body class="body">
    <div class="container-fluid text-center" style="width: 36rem;">
        <div class="card">
            <h1 class="card-header text-center">Cadastro de Fornecedores</h1>

            <form action="cadastro.php" method="post" class="row justify-content-md-center" style="padding-top: 10px;">
                <label class="col-sm-4 col-form-label" for="nome">Fornecedor</label>
                <div class="col-sm-5">
                    <input class="form-control mb-3" type="text" name="nome" id="nome">
                </div>

                <label class="col-sm-4 col-form-label" for="endereco">Endereço</label>
                <div class="col-sm-5">
                    <input class="form-control mb-3" type="text" name="endereco" id="endereco">
                </div>

                <div class="col-sm-5">
                    <button class="btn btn-outline-success" style="margin-top: 60px;">Salvar</button>
                </div>
            </form>

            <div class="row justify-content-md-center mb-4">
                <form action="../formPrincipal.php" class="col-5 text-center">
                    <button class="btn btn-outline-dark"> Início </button>
                </form>

                <form action="./listagem.php" class="col-5 text-center">
                    <button class="btn btn-outline-dark"> Listagem </button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../script.js"></script>
</body>

</html>