<?php
class DAOFornecedor
{
    public function inclui(Fornecedor $fornecedor)
    {
        $sql = 'insert 
                into fornecedor (nome, endereco, valorNotinha, dataCompraNotinha, dataPagamentoNotinha) 
                values (?, ?, ?, ?, ?)';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $fornecedor->getNome());
        $pst->bindValue(2, $fornecedor->getEndereco());
        $pst->bindValue(3, $fornecedor->getValorNotinha());
        $pst->bindValue(4, $fornecedor->getDataCompraNotinha());
        $pst->bindValue(5, $fornecedor->getDataPagamentoNotinha());

        if($pst->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function exclui(Fornecedor $fornecedor)
    {
        $sql = 'delete 
                from fornecedor 
                where idFornecedor = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $fornecedor->getIdFornecedor());
        if($pst->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function altera(Fornecedor $fornecedor)
    {
        $sql = 'update fornecedor 
                set nome = ?, endereco = ?, valorNotinha = ?, dataCompraNotinha = ?, 
                dataPagamentoNotinha = ? 
                where idFornecedor = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $fornecedor->getNome());
        $pst->bindValue(2, $fornecedor->getEndereco());
        $pst->bindValue(3, $fornecedor->getValorNotinha());
        $pst->bindValue(4, $fornecedor->getDataCompraNotinha());
        $pst->bindValue(5, $fornecedor->getDataPagamentoNotinha());
        $pst->bindValue(6, $fornecedor->getIdFornecedor());
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
        $pst = Conexao::getPreparedStatement('select * from fornecedor;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function localiza($id)
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from fornecedor where idFornecedor = ?;');
        $pst->bindValue(1, $id);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
}
?>