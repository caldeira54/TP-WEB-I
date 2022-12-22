<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Formulário de edição do Estoque</title>
</head>
<?php
include('../../verificaLogin.php');
?>
<body class="body">
    <?php
    require_once '../../dao/DAOEstoque.php';
    require_once '../../dao/Conexao.php';
    require_once '../../modelo/Estoque.php';

    $id = filter_input(INPUT_GET, 'idEstoque');

    $dao = new DAOEstoque();
    $lista = $dao->localiza($id);

    $estoque = $lista[0];
    ?>

    <div class="cadastro">
        <h1> Edição </h1>
        <form action="edicao.php" method="post">
            <input type="hidden" name="idEstoque" id="idEstoque" value="<?= $estoque['idEstoque'] ?>">

            <label for="idFornecedor">Fornecedor</label>
            <input class="dados" type="text" name="idFornecedor" id="idFornecedor" value="<?= $estoque['idFornecedor'] ?>">

            <br>

            <label for="nome">Nome</label>
            <input class="dados" type="text" name="nome" value="<?= $estoque['nome'] ?>">

            <br>

            <label for="preco">Preço</label>
            <input class="dados" type="text" name="preco" value="<?= $estoque['preco'] ?>">

            <br>

            <label for="quantidade">Quantidade</label>
            <input class="dados" type="text" name="quantidade" value="<?= $estoque['quantidade'] ?>">

            <br>

            <button class="btnSalvar"> Salvar </button>
        </form>

        <form action="../formPrincipal.php">
            <button class="btnInicio"> Início </button>
        </form>

        <form action="./listagem.php">
            <button> Estoque </button>
        </form>
    </div>

</body>

</html>