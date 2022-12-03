<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Icones -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="./estilo.css">
  <title>Página Principal</title>
</head>

<body>
  <div class="btnAbre">
    <span class="material-symbols-outlined">
      menu_open
    </span>
  </div>
  <nav class="menuLateral">
    <div class="titulo">Bar do Clé <span class="material-symbols-outlined btnFecha"> close </span></div>
    <ul>
      <li><a href="#" class="fornecedor">Fornecedor<span class="material-symbols-outlined setaFornecedor"> arrow_right </span></a>
        <ul class="itensFornecedor">
          <li><a href="./fornecedor/listagem.php">Listagem</a></li>
          <li><a href="./fornecedor/formCadastro.php">Cadastrar</a></li>
        </ul>
      </li>
      <li><a href="#" class="notinha">Notinha<span class="material-symbols-outlined setaNotinha"> arrow_right </span></a>
        <ul class="itensNotinha">
          <li><a href="./notaPromissoria/listagem.php">Listagem</a></li>
          <li><a href="./notaPromissoria/formCadastro.php">Cadastrar</a></li>
        </ul>
      </li>
      <li><a href="#" class="estoque">Estoque<span class="material-symbols-outlined setaEstoque"> arrow_right </span></a>
        <ul class="itensEstoque">
          <li><a href="./estoque/listagem.php">Listagem</a></li>
          <li><a href="./estoque/formCadastro.php">Cadastrar</a></li>
        </ul>
      </li>
      <li><a href="#" class="produto">Produtos<span class="material-symbols-outlined setaProduto"> arrow_right </span></a>
        <ul class="itensProduto">
          <li><a href="./produto/listagem.php">Listagem</a></li>
          <li><a href="./produto/formCadastro.php">Cadastrar</a></li>
        </ul>
      </li>
      <li><a href="#" class="vendasDiarias">Vendas Diárias<span class="material-symbols-outlined setaVendasDiarias"> arrow_right </span></a>
        <ul class="itensVendasDiarias">
          <li><a href="./vendasDiarias/listagem.php">Listagem</a></li>
          <li><a href="./vendasDiarias/formCadastro.php">Cadastrar</a></li>
        </ul>
      </li>
      <li><a href="#" class="vendaAVista">Vendas á Vista<span class="material-symbols-outlined setaVendaAVista"> arrow_right </span></a>
        <ul class="itensVendaAVista">
          <li><a href="./vendaAVista/listagem.php">Listagem</a></li>
          <li><a href="./vendaAVista/formCadastro.php">Cadastrar</a></li>
        </ul>
      </li>
      <li><a href="#" class="vendaAPrazo">Vendas á Prazo<span class="material-symbols-outlined setaVendaAPrazo"> arrow_right </span></a>
        <ul class="itensVendaAPrazo">
          <li><a href="./vendaAPrazo/listagem.php">Listagem Ativas</a></li>
          <li><a href="./vendaAPrazo/listagemInativas.php">Listagem Inativas</a></li>
          <li><a href="./vendaAPrazo/formCadastro.php">Cadastrar</a></li>
        </ul>
      </li>
    </ul>
  </nav>

  <script type="text/javascript" src="./script.js"></script>

  <?php
  include('../verificaLogin.php');
  ?>
  <div class="funcionario">
    <p>
      <?php
      echo 'Bem vindo: ';
      echo $_SESSION['nome'];
      ?>
    </p>
  </div>

  <!-- <h2><a href="../logout.php">Sair</a></h2> -->
</body>

</html>