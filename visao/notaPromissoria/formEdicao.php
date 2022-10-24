<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Nota Promissória</title>
</head>
<body>
    <?php
        require_once '../../dao/DAONotaPromissoria.php';
        require_once '../../dao/Conexao.php';
        require_once '../../modelo/NotaPromissoria.php';

        $id = filter_input(INPUT_GET, 'id');

        $dao = new DAONotaPromissoria();
        $lista = $dao->localiza($id);

        $notaPromissoria = $lista[0];
    ?>

    <form action="edicao.php" method="post">
        <input type="hidden" name="id" id="id" value="<?=$notaPromissoria['id'] ?>">

        <label for="idFornecedor">Fornecedor</label>
        <input type="text" name="nome" id="nome" value="<?=$notaPromissoria['idFornecedor'] ?>">

        <br>

        <label for="preco">Preço</label>
        <input type="text" name="preco" value="<?=$notaPromissoria['preco'] ?>">

        <br>

        <label for="dataCompra">Data da Compra</label>
        <input type="text" name="dataCompra" value="<?=$notaPromissoria['dataCompra'] ?>">

        <br>

        <label for="dataPagamento">Data do Pagamento</label>
        <input type="text" name="dataPagamento" value="<?=$notaPromissoria['dataPagamento'] ?>">

        <br>
        <button> Salvar </button>
    </form>

    <form action="../../index.php">
        <button> Início </button>
    </form>
</body>
</html>