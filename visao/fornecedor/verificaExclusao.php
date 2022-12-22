<?php

$id = filter_input(INPUT_GET, 'idFornecedor');

echo "Deseja realmente excluir o fornecedor $id";
echo "<a href='./listagem.php'> Não </a>";
echo "<form method='POST' action='exclui.php'> 
        <input type='hidden' name='idFornecedor' value='$id'>
        <input type='hidden' name='checado' value='1'> 
        <button> Sim </button>
      </form>";
