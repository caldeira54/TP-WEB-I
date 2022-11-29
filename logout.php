<?php
session_start();
unset($_SESSION['idFuncionario']);
unset($_SESSION['nome']);
unset($_SESSION['usuario']);
unset($_SESSION['senha']);
header('Location: ./index.php');
exit();
?>