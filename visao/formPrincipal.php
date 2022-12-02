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
      <li><a href="#" class="notinha">Notinha</a>
        <ul class="itensNotinha">
          <li><a href="./notaPromissoria/listagem.php">Listagem</a></li>
          <li><a href="./notaPromissoria/formCadastro.php">Cadastrar</a></li>
        </ul>
      </li>
      <li><a href="#" class="nordeste">Nordeste<span class="material-symbols-outlined seta1"> arrow_right </span></a>
        <ul class="itensNordeste">
          <li><a href="#">Pernambuco</a></li>
          <li><a href="#">Maranhão</a></li>
          <li><a href="#">Sergipe</a></li>
          <li><a href="#">Ceará</a></li>
        </ul>
      </li>
      <li><a href="#" class="sudeste">Sudeste <span class="material-symbols-outlined seta2">
            arrow_right
          </span></a>
        <ul class="itensSudeste">
          <li><a href="#">Minas Gerais</a></li>
          <li><a href="#">São Paulo</a></li>
          <li><a href="#">Rio de Janeiro</a></li>
          <li><a href="#">Espiríto Santo</a></li>
        </ul>
      </li>
      <li><a href="#">Centro-Oeste</a></li>
    </ul>
  </nav>

  <script type="text/javascript" src="./script.js"></script>

  <!-- <?php
        include('../verificaLogin.php');
        ?>
  <div class="cabecalho">
    <div class="iconeMenu">
      <img src="./css/imagens/lista.png">
    </div>

    <div class="funcionario">
      <p>
        <?php
        echo 'Bem vindo: ';
        echo $_SESSION['nome'];
        ?>
      </p>
    </div>
  </div> -->


  <!-- 
  

  
  

  <a href="./estoque/listagem.php">Listagem do Estoque</a>
  <a href="./estoque/formCadastro.php">Cadastrar produto no Estoque</a>

  <a href="./produto/listagem.php">Listagem de Produtos</a>
  <a href="./produto/formCadastro.php">Cadastrar Produto</a>

  <a href="./vendasDiarias/listagem.php">Listagem das Vendas Diárias</a>
  <a href="./vendasDiarias/formCadastro.php">Cadastrar Venda Diária</a>

  <a href="./funcionario/listagem.php">Listagem dos Funcionários</a>
  <a href="./funcionario/formCadastro.php">Cadastrar Funcionário</a>

  <a href="./vendaAVista/listagem.php">Listagem das Vendas à Vista</a>
  <a href="./vendaAVista/formCadastro.php">Cadastrar Venda à Vista</a>

  <a href="./vendaAPrazo/listagem.php">Listagem das Vendas à Prazo</a>
  <a href="./vendaAPrazo/listagemInativas.php">Listagem das Vendas à Prazo Inativas</a>
  <a href="./vendaAPrazo/formCadastro.php">Cadastrar Venda à Prazo</a> -->

  <!-- <h2><a href="../logout.php">Sair</a></h2> -->
</body>

</html>