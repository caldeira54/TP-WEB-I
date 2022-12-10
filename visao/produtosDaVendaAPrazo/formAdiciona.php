<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo.css">
    <title>Adicionar Produto</title>
</head>

<body>
    <?php
    session_start();

    // require_once '../../dao/DAOEstoque.php';
    // require_once '../../dao/Conexao.php';

    // $idEstoque = filter_input(INPUT_POST, 'idEstoque');
    // $idVendaAPrazo = filter_input(INPUT_POST, 'idVendaAPrazo');

    // $dao = new DAOEstoque();
    // $lista = $dao->localiza($idEstoque, $idVendaAPrazo);

    // $p = $lista[0];
    ?>

    <div class="cadastro">
        <form action="adiciona.php" method="post">
            <label>Venda Nº</label>
            <input class="dados" type="text" readonly name="idVendaAPrazo" id="idVendaAPrazo" value="<?= $_SESSION['ultimaCompra'] ?>">
            <input type="hidden" name="idEstoque" id="idEstoque" value="<?= $estoque['idEstoque'] ?>">

            <br>

            <label for="idEstoque">Produto</label>
            <!-- <input type="text" class="dados" name="idEstoque" id="idEstoque" value="<?= $p['nome'] ?>"> -->
            <select class="dados" name="idEstoque" id="idEstoque">
                <?php
                require_once '../../modelo/Estoque.php';
                require_once '../../dao/DAOEstoque.php';
                require_once '../../dao/Conexao.php';

                $dao = new DAOEstoque();
                $lista = $dao->listaSimples();

                if ($lista) {
                    foreach ($lista as $l) {
                        echo '<option value="' . $l['idEstoque'] . '">' . $l['nome'] . '</option>';
                    }
                }
                ?>
            </select>

            <br>

            <label for="quantidade">Quantidade</label>
            <input class="dados" type="text" name="quantidade" id="quantidade">

            <br>

            <label for="valor">Valor</label>
            <input class="dados" type="text" name="valor" id="valor">

            <br>

            <button class="btnSalvar">Salvar</button>
        </form>

        <form action="../formPrincipal.php">
            <button class="btnInicio"> Início </button>
        </form>
    </div>
</body>

</html>