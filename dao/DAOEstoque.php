<?php
class DAOEstoque
{
    public function inclui(Estoque $estoque)
    {
        $sql = 'insert 
                into estoque (idFornecedor, nome, preco, quantidade) 
                values (?, ?, ?, ?)';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $estoque->getIdFornecedor());
        $pst->bindValue(2, $estoque->getNome());
        $pst->bindValue(3, $estoque->getPreco());
        $pst->bindValue(4, $estoque->getQuantidade());

        if($pst->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function exclui(Estoque $estoque)
    {
        $sql = 'delete 
                from estoque 
                where idEstoque = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $estoque->getIdEstoque());
        if($pst->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function altera(Estoque $estoque)
    {
        $sql = 'update estoque 
                set idFornecedor = ?, nome = ?, preco = ?, quantidade = ?
                where idEstoque = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $estoque->getIdFornecedor());
        $pst->bindValue(2, $estoque->getNome());
        $pst->bindValue(3, $estoque->getPreco());
        $pst->bindValue(4, $estoque->getQuantidade());
        $pst->bindValue(5, $estoque->getIdEstoque());
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
        $pst = Conexao::getPreparedStatement('select * from estoque;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function localiza($id)
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from estoque where idEstoque = ?;');
        $pst->bindValue(1, $id);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
}
?>