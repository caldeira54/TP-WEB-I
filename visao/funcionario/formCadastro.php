<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Nota Promissória</title>
</head>
<body class="body">
    <form action="cadastro.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <br>

        <label for="usuario">Usuário</label>
        <input oninput="mascaraData(this)" type="text" name="usuario" id="usuario">

        <br>

        <label for="senha">Senha</label>
        <input oninput="mascaraData(this)" type="text" name="senha" id="senha">

        <br>

        <button style=" margin-left: 75px ">Salvar</button>
    </form>

    <form action="../formPrincipal.php">
        <button> Início </button>
    </form>
</body>
</html>