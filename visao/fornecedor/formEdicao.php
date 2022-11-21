<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de edição do Fornecedor</title>
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

    <form action="edicao.php" method="post">
        <input type="hidden" name="idFornecedor" id="idFornecedor" value="<?=$fornecedor['idFornecedor'] ?>">

        <label for="nome">Fornecedor</label>
        <input type="text" name="nome" id="nome" value="<?=$fornecedor['nome'] ?>">

        <br>

        <label for="endereco">Endereço</label>
        <input type="text" name="endereco" value="<?=$fornecedor['endereco'] ?>">

        <br>

        <button> Salvar </button>
    </form>

    <form action="../formEdicao.php">
        <button> Início </button>
    </form>
</body>
</html>