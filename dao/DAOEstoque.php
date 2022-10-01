<?php
class DAOEstoque
{
    public function inclui(Estoque $estoque)
    {
        $sql = 'insert 
                into estoque (dataRenovacao, quantidade) 
                values (?, ?, ?, ?)';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $estoque->getDataRenovacao());
        $pst->bindValue(2, $estoque->getQuantidade());

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
                set dataRenovacao = ?, quantidade = ? 
                where idEstoque = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $estoque->getDataRenovacao());
        $pst->bindValue(2, $estoque->getQuantidade());
        $pst->bindValue(3, $estoque->getIdEstoque());
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