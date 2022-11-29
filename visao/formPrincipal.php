<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
</head>
<body>
  <?php
  include('../verificaLogin.php');
  ?>
  <h2><?php echo $_SESSION['nome'] ?></h2>
<br>
<a href="./fornecedor/listagem.php">Listagem de Fornecedor</a>
  <br>
  <a href="./fornecedor/formCadastro.php">Cadastrar Fornecedor</a>

  <br> <br>

  <a href="./notaPromissoria/listagem.php">Listagem de Nota Promissória</a>
  <br>
  <a href="./notaPromissoria/formCadastro.php">Cadastrar Nota Promissória</a>

  <br> <br>

  <a href="./estoque/listagem.php">Listagem do Estoque</a>
  <br>
  <a href="./estoque/formCadastro.php">Cadastrar produto no Estoque</a>

  <br> <br>

  <a href="./produto/listagem.php">Listagem de Produtos</a>
  <br>
  <a href="./produto/formCadastro.php">Cadastrar Produto</a>

  <br> <br>

  <a href="./vendasDiarias/listagem.php">Listagem das Vendas Diárias</a>
  <br>
  <a href="./vendasDiarias/formCadastro.php">Cadastrar Venda Diária</a>

  <br> <br>

  <a href="./funcionario/listagem.php">Listagem dos Funcionários</a>
  <br>
  <a href="./funcionario/formCadastro.php">Cadastrar Funcionário</a>

  <br> <br>

  <a href="./vendaAVista/listagem.php">Listagem das Vendas à Vista</a>
  <br>
  <a href="./vendaAVista/formCadastro.php">Cadastrar Venda à Vista</a>

  <br> <br>

  <a href="./vendaAPrazo/listagem.php">Listagem das Vendas à Prazo</a>
  <br>
  <a href="./vendaAPrazo/listagemInativas.php">Listagem das Vendas à Prazo Inativas</a>
  <br>
  <a href="./vendaAPrazo/formCadastro.php">Cadastrar Venda à Prazo</a>

  <h2><a href="../logout.php">Sair</a></h2>
</body>
</html>