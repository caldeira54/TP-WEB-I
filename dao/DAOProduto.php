<?php
class DAOProduto
{
    public function inclui(Produto $produto)
    {
        $sql = 'insert 
                into produto (idFornecedor, nome, precoCompra, precoVenda) 
                values (?, ?, ?, ?)';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produto->getIdFornecedor());
        $pst->bindValue(2, $produto->getNome());
        $pst->bindValue(3, $produto->getPrecoCompra());
        $pst->bindValue(4, $produto->getPrecoVenda());

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
                where idProduto = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produto->getIdProduto());
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
                set idFornecedor = ?, nome = ?, precoCompra = ?, precoVenda = ? 
                where idProduto = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produto->getIdFornecedor());
        $pst->bindValue(2, $produto->getNome());
        $pst->bindValue(3, $produto->getPrecoCompra());
        $pst->bindValue(4, $produto->getPrecoVenda());
        $pst->bindValue(5, $produto->getIdProduto());
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
        $pst = Conexao::getPreparedStatement('select * from produto where idProduto = ?;');
        $pst->bindValue(1, $id);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
}
?>