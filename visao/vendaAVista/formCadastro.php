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

        <label for="valor">Preço</label>
        <input type="text" name="valor" id="valor">

        <br>

        <label for="data">Data</label>
        <input oninput="mascaraData(this)" type="text" name="data" id="data">

        <br>

        <button style=" margin-left: 90px ">Salvar</button>
    </form>

    <form action="../../index.php">
        <button> Início </button>
    </form>
</body>
</html>