<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro de Venda à Vista</title>
</head>
<body>
    <script src="../../mascaras/mascaraData.js">

    </script>
    <form action="cadastro.php" method="post">
        <label for="valor">Preço</label>
        <input type="text" name="valor" id="valor">

        <br>

        <label for="data">Data</label>
        <input oninput="mascaraData(this)" type="text" name="data" id="data">

        <br>

        <button id = 'salvar' style=" margin-left: 90px ">Salvar</button>

        <!-- <script>
            document.getElementById('salvar').addEventListener('click', () => {
                window.open('../produtosDaVenda/formCadastro.php', '_self');
            });
        </script> -->
    </form>

    <form action="../../index.php">
        <button> Início </button>
    </form>
</body>
</html>