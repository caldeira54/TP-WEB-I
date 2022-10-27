<?php
class DAOProduto
{
    public function inclui(Produto $produto)
    {
        $sql = 'insert 
                into produto (idEstoque, idFuncionario, nome, preco) 
                values (?, ?, ?, ?)';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produto->getIdEstoque());
        $pst->bindValue(2, $produto->getIdFuncionario());
        $pst->bindValue(3, $produto->getNome());
        $pst->bindValue(4, $produto->getPreco());

        if($pst->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function exclui(Produto $produto)
    {
        $sql = 'delete 
                from produto 
                where idEstoque = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produto->getIdEstoque());
        if($pst->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function altera(Produto $produto)
    {
        $sql = 'update produto 
                set idFuncionario = ?, nome = ?, preco = ? 
                where idEstoque = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produto->getIdFuncionario());
        $pst->bindValue(2, $produto->getNome());
        $pst->bindValue(3, $produto->getPreco());
        $pst->bindValue(4, $produto->getIdEstoque());
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
        $pst = Conexao::getPreparedStatement('select * from produto;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function localiza($id)
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from produto where idEstoque = ?;');
        $pst->bindValue(1, $id);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
}
?>