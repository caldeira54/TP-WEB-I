<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro dos Produtos na Venda à Vista</title>
</head>
<body>
    <?php
        // require_once '../../dao/DAOEstoque.php';
        // require_once '../../dao/Conexao.php';
        // require_once '../../modelo/Estoque.php';

        // $id = filter_input(INPUT_GET, 'idEstoque');

        // $dao = new DAOEstoque();
        // $lista = $dao->localiza($id);

        // $estoque = $lista[0];

        session_start();
    ?>
    <form action="cadastro.php" method="post">
        <input type="text" readonly name="idVendaAVista" id="idVendaAVista" value="<?=$_SESSION['ultimaCompra'] ?>">
        <input type="hidden" name="idEstoque" id="idEstoque" value="<?=$estoque['idEstoque'] ?>">

        <br>

        <label for="idEstoque">Produto</label>
        <select name="idEstoque" id="idEstoque">
            <?php
                require_once '../../modelo/Produto.php';
                require_once '../../dao/DAOProduto.php';
                require_once '../../dao/Conexao.php';

                $dao = new DAOProduto();
                $lista = $dao->lista();

                if ($lista) {
                    foreach ($lista as $l) {
                        echo '<option value="' . $l['idEstoque'] . '">' . $l['nome'] . '</option>';
                    }
                }
            ?>
        </select>

        <br>

        <label for="quantidade">Quantidade</label>
        <input type="text" name="quantidade" id="quantidade">

        <br>

        <label for="valorUnitario">Valor</label>
        <input type="text" name="valorUnitario" id="valorUnitario">

        <br>

        <button style=" margin-left: 90px ">Salvar</button>
    </form>

    <form action="../../index.php">
        <button> Início </button>
    </form>
</body>
</html>