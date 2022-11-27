<?php
session_start();
    // require_once './dao/Conexao.php';
    include('conexao.php');

    if (empty($_POST['usuario']) || empty($_POST['senha'])) {
        header('Location: index.php');
        exit();
    }

    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $query = "select *
              from funcionario
              where usuario = '{$usuario}' and senha = '{$senha}';";

    $result = mysqli_query($conexao, $query);

    $row = mysqli_num_rows($result);

    if($row == 1)
    {
        $_SESSION['usuario'] = $usuario;
        header("Location: ./visao/formPrincipal.php");
        exit();
    } 
    else 
    {
        $_SESSION['invalido'] = true;
        header("Location: ./index.php");
        exit();
    }
    // $usuario = filter_input(INPUT_POST, 'usuario');
    // $senha = filter_input(INPUT_POST, 'senha');

    // var_dump($usuario);
    // var_dump($senha);

    // if(($usuario && $senha))
    // {
    //     $sql = "select usuario, senha
    //             from funcionario
    //             where usuario = '{$usuario}' and senha = '{$senha}';";

    //     $pst = Conexao::getPreparedStatement($sql);

    //     if($pst->execute())
    //     {
    //         echo 'return true';
    //     }
    //     else 
    //     {
    //         echo 'return false';
    //     }
    // }
    // else {
    //     echo 'Dados Inválidos!';
    // }
?>