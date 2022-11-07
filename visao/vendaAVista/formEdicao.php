<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de edição de Venda à Vista</title>
</head>
<body>
    <script src="../../mascaras/mascaraData.js">

    </script>
    <?php
        require_once '../../dao/DAOVendaAVista.php';
        require_once '../../dao/Conexao.php';
        require_once '../../modelo/VendaAVista.php';

        $id = filter_input(INPUT_GET, 'idEstoque');

        $dao = new DAOVendaAVista();
        $lista = $dao->localiza($id);

        $vendaAVista = $lista[0];
    ?>

    <form action="edicao.php" method="post">
        <input type="hidden" name="idVendaAVista" id="idVendaAVista" value="<?=$vendaAVista['idVendaAVista'] ?>">

        <label for="valor">Preço</label>
        <input type="text" name="valor" id="valor" value="<?=$vendaAVista['valor'] ?>">

        <br>

        <label for="data">Data</label>
        <input oninput="mascaraData(this)" type="text" name="data" value="<?=$vendaAVista['data'] ?>">

        <br>

        <button> Salvar </button>
    </form>

    <form action="../../index.php">
        <button> Início </button>
    </form>
</body>
</html>