<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo.css">
    <title>Formulário de cadastro do Estoque</title>
</head>

<body>
    <div class="cadastro">
        <h1> Cadastro de Estoque </h1>
        <form action="cadastro.php" method="post">
            <label for="idFornecedor">Fornecedor</label>
            <select class="dados" name="idFornecedor" id="idFornecedor">
                <?php
                require_once '../../modelo/Fornecedor.php';
                require_once '../../dao/DAOFornecedor.php';
                require_once '../../dao/Conexao.php';

                $dao = new DAOFornecedor();
                $lista = $dao->lista();

                if ($lista) {
                    foreach ($lista as $l) {
                        echo '<option value="' . $l['idFornecedor'] . '">' . $l['nome'] . '</option>';
                    }
                }
                ?>
            </select>

            <br>

            <label for="nome">Nome</label>
            <input class="dados" type="text" name="nome" id="nome">

            <br>

            <label for="preco">Preço</label>
            <input class="dados" type="text" name="preco" id="preco">

            <br>

            <label for="quantidade">Quantidade</label>
            <input class="dados" type="text" name="quantidade" id="quantidade">

            <br>

            <button class="btnSalvar">Salvar</button>
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