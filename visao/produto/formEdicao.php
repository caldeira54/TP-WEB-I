<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de edição do Produto</title>
</head>
<body>
    <?php
        require_once '../../dao/DAOProduto.php';
        require_once '../../dao/Conexao.php';
        require_once '../../modelo/Produto.php';

        $id = filter_input(INPUT_GET, 'idEstoque');

        $dao = new DAOProduto();
        $lista = $dao->localiza($id);

        $produto = $lista[0];
    ?>

    <form action="edicao.php" method="post">
        <input type="hidden" name="idEstoque" id="idEstoque" value="<?=$produto['idEstoque'] ?>">
        <input type="hidden" name="idFuncionario" id="idFuncionario" value="<?=$produto['idFuncionario'] ?>">

        <label for="preco">Preço</label>
        <input type="text" name="preco" value="<?=$produto['preco'] ?>">

        <br>

        <button> Salvar </button>
    </form>

    <form action="../../index.php">
        <button> Início </button>
    </form>
</body>
</html>