<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produto</title>
</head>

<body>
    <?php
    session_start();
    ?>
    <form action="adiciona.php" method="post">
        <input type="text" readonly name="idVendaAPrazo" id="idVendaAPrazo" value="<?= $_SESSION['ultimaCompra'] ?>">
        <input type="hidden" name="idEstoque" id="idEstoque" value="<?= $estoque['idEstoque'] ?>">

        <br>

        <label for="idEstoque">Produto</label>
        <select name="idEstoque" id="idEstoque">
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
        <input type="text" name="quantidade" id="quantidade">

        <br>

        <label for="valor">Valor</label>
        <input type="text" name="valor" id="valor">

        <br>

        <button style=" margin-left: 90px ">Salvar</button>
    </form>

    <form action="../formPrincipal.php">
        <button> Início </button>
    </form>
</body>

</html>