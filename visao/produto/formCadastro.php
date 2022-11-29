<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro do Produto</title>
</head>
<body>
    <form action="cadastro.php" method="post">
        <label for="idEstoque">Produto</label>
        <select name="idEstoque" id="idEstoque">
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
        <input readonly type="text" name="idFuncionario" value="<?php echo $_SESSION['nome']?>">

        <br>

        <label for="preco">Preço</label>
        <input type="text" name="preco" id="preco">

        <br>

        <button style=" margin-left: 90px ">Salvar</button>
    </form>

    <form action="../formPrincipal.php">
        <button> Início </button>
    </form>
</body>
</html>