<?php
require_once './dao/Conexao.php';
require_once './dao/DAOFuncionario.php';
require_once './modelo/Funcionario.php';

session_start();

$obj = new Funcionario();
$dao = new DAOFuncionario();

$usuario = filter_input(INPUT_POST, 'usuario');
$senha = filter_input(INPUT_POST, 'senha');

$sql = 'select * 
        from funcionario 
        where usuario = ? and senha = ?';
$pst = Conexao::getPreparedStatement($sql);
$pst->bindValue(1, $obj->getNome());
$pst->bindValue(2, $obj->getUsuario());

if ($pst->execute())
{
    $_SESSION['usuario'] = $usuario;
    header("Location: ./visao/formPrincipal.php");
}
else
{
    $_SESSION['invalido'] = true;
    header("Location: ./index.php");
}