<?php
class DAOFuncionario
{
    public function inclui(Funcionario $funcionario)
    {
        $sql = 'insert 
                into funcionario (nome, usuario, senha) 
                values (?, ?, ?)';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $funcionario->getNome());
        $pst->bindValue(2, $funcionario->getUsuario());
        $pst->bindValue(3, $funcionario->getSenha());

        if($pst->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function exclui(Funcionario $funcionario)
    {
        $sql = 'delete 
                from funcionario 
                where idFuncionario = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $funcionario->getIdFuncionario());
        if($pst->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function altera(Funcionario $funcionario)
    {
        $sql = 'update 
                funcionario set nome = ?, usuario = ?, senha = ?
                where idFuncionario = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $funcionario->getNome());
        $pst->bindValue(2, $funcionario->getUsuario());
        $pst->bindValue(3, $funcionario->getSenha());
        $pst->bindValue(4, $funcionario->getIdFuncionario());
        if($pst->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function lista()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from funcionario;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function logar(Funcionario $funcionario)
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * 
                                              from funcionario 
                                              where usuario = ? and senha = ?');
        $pst->bindValue(1, $funcionario->getUsuario());
        $pst->bindValue(2, $funcionario->getsenha());
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);

        if($lista)
        {
            $ok = $lista[0];
            return $ok;
        }
        else
        {
            return false;
        }
    }

    public function localiza($id)
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from funcionario where idFuncionario = ?;');
        $pst->bindValue(1, $id);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
}
?>