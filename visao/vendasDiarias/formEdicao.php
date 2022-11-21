<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de edição das Vendas Diárias</title>
</head>
<body>
    <script src="../../mascaras/mascaraData.js">
        
    </script>
    
    <?php
        require_once '../../dao/DAOVendasDiarias.php';
        require_once '../../dao/Conexao.php';
        require_once '../../modelo/VendasDiarias.php';

        $id = filter_input(INPUT_GET, 'idVendasDiarias');

        $dao = new DAOVendasDiarias();
        $lista = $dao->localiza($id);

        $vendasDiarias = $lista[0];
    ?>

    <form action="edicao.php" method="post">
        <input type="hidden" name="idVendasDiarias" id="idVendasDiarias" value="<?=$vendasDiarias['idVendasDiarias'] ?>">
        <input type="hidden" name="idFuncionario" id="idFuncionario" value="<?=$vendasDiarias['idFuncionario'] ?>">

        <label for="data">Data</label>
        <input type="text" name="data" id="data" value="<?=$vendasDiarias['data'] ?>">

        <br>

        <label for="valor">Valor</label>
        <input type="text" name="valor" value="<?=$vendasDiarias['valor'] ?>">

        <br>

        <button> Salvar </button>
    </form>

    <form action="../formPrincipal.php">
        <button> Início </button>
    </form>
</body>
</html>