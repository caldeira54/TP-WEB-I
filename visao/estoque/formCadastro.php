<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro do Estoque</title>
</head>
<body>
    <form action="cadastro.php" method="post">
        <label for="idFornecedor">Fornecedor</label>
        <input type="text" name="idFornecedor" id="idFornecedor">

        <br>

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <br>

        <label for="preco">Preço</label>
        <input type="text" name="preco" id="preco">

        <br>

        <label for="quantidade">Quantidade</label>
        <input type="text" name="quantidade" id="quantidade">

        <br>

        <button style=" margin-left: 90px ">Salvar</button>
    </form>

    <form action="../../index.php">
        <button> Início </button>
    </form>
</body>
</html>