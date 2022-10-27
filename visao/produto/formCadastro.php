<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro do Produto</title>
</head>
<body>
    <form action="cadastro.php" method="post">
        <label for="idEstoque">ID Produto</label>
        <input type="text" name="idEstoque" id="idEstoque">

        <br>

        <label for="idFuncionario">Funcionário</label>
        <input type="text" name="idFuncionario" id="idFuncionario">

        <br>

        <label for="nome">Produto</label>
        <input type="text" name="nome" id="nome">

        <br>

        <label for="preco">Preço</label>
        <input type="text" name="preco" id="preco">

        <br>

        <button style=" margin-left: 90px ">Salvar</button>
    </form>

    <form action="../../index.php">
        <button> Início </button>
    </form>
</body>
</html>