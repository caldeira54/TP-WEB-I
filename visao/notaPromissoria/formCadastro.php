<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Nota Promissória</title>
</head>
<body>
    <script src="../../mascaras/mascaraData.js">
        
    </script>

    <form action="cadastro.php" method="post">
        <label for="idFornecedor">Fornecedor</label>
        <input type="text" name="idFornecedor" id="idFornecedor">

        <br>

        <label for="preco">Preço</label>
        <input type="text" name="preco" id="preco">

        <br>

        <label for="dataCompra">Data da Compra</label>
        <input oninput="mascaraData(this)" type="text" name="dataCompra" id="dataCompra">

        <br>

        <label for="dataPagamento">Data do Pagamento</label>
        <input oninput="mascaraData(this)" type="text" name="dataPagamento" id="dataPagamento">

        <br>

        <button style=" margin-left: 75px ">Salvar</button>
    </form>

    <form action="../../index.php">
        <button> Início </button>
    </form>
</body>
</html>