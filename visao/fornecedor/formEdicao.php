<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo.css">
    <title>Edição do Fornecedor</title>
</head>

<body>
    <?php
    require_once '../../dao/DAOFornecedor.php';
    require_once '../../dao/Conexao.php';
    require_once '../../modelo/Fornecedor.php';

    $id = filter_input(INPUT_GET, 'idFornecedor');

    $dao = new DAOFornecedor();
    $lista = $dao->localiza($id);

    $fornecedor = $lista[0];
    ?>

    <div class="cadastro">
        <h1> Edição de Fornecedor </h1>
        <form action="edicao.php" method="post">
            <input type="hidden" name="idFornecedor" id="idFornecedor" value="<?= $fornecedor['idFornecedor'] ?>">

            <label for="nome">Fornecedor</label>
            <input type="text" name="nome" id="nome" value="<?= $fornecedor['nome'] ?>">

            <br>

            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" value="<?= $fornecedor['endereco'] ?>">

            <br>

            <button class="btnSalvar"> Salvar </button>
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