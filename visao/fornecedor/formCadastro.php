<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro do Fornecedor</title>
</head>
<body>
    <form action="cadastro.php" method="post">
        <label for="nome">Fornecedor</label>
        <input type="text" name="nome" id="nome">

        <br>

        <label for="endereco">Endereco</label>
        <input type="text" name="endereco" id="endereco">

        <br>

        <button style=" margin-left: 126px ">Salvar</button>
    </form>

    <form action="../../index.php">
        <button> Início </button>
    </form>
</body>
</html>