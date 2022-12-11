<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Formulário de cadastro do Produto</title>
</head>

<body>
    <div class="cadastro">
        <h1> Cadastro de Produto</h1>
        <form action="cadastro.php" method="post">
            <label for="idEstoque">Produto</label>
            <select class="dados" name="idEstoque" id="idEstoque">
                <?php
                require_once '../../modelo/Estoque.php';
                require_once '../../dao/DAOEstoque.php';
                require_once '../../dao/Conexao.php';

                session_start();

                $dao = new DAOEstoque();
                $lista = $dao->lista();

                if ($lista) {
                    foreach ($lista as $l) {
                        echo '<option value="' . $l['idEstoque'] . '">' . $l['nome'] . '</option>';
                    }
                }
                ?>
            </select>

            <br>

            <label for="idFuncionario">Funcionário</label>
            <input class="dados" readonly type="text" name="idFuncionario" value="<?php echo $_SESSION['nome'] ?>">

            <br>

            <label for="preco">Preço</label>
            <input class="dados" type="text" name="preco" id="preco">

            <br>

            <button class="btnSalvar">Salvar</button>
        </form>

        <form action="../formPrincipal.php">
            <button class="btnInicio"> Início </button>
        </form>

        <form action="./listagem.php">
            <button> Produtos </button>
        </form>
    </div>
</body>

</html>