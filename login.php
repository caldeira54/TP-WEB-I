<?php
require_once './dao/Conexao.php';
require_once './dao/DAOFuncionario.php';
require_once './modelo/Funcionario.php';

session_start();

$obj = new Funcionario();
$dao = new DAOFuncionario();

$usuario = filter_input(INPUT_POST, 'usuario');
$senha = filter_input(INPUT_POST, 'senha');

$obj->setUsuario($usuario);
$obj->setSenha($senha);
$lista = $dao->logar($obj);

if ($lista) {
    $_SESSION['idFuncionario'] = $lista['idFuncionario'];
    $_SESSION['nome'] = $lista['nome'];
    $_SESSION['usuario'] = $lista['usuario'];
    $_SESSION['senha'] = $lista['senha'];
    header("Location: ./visao/formPrincipal.php");
} else {
    $_SESSION['invalido'] = true;
    header("Location: ./index.php");
}
