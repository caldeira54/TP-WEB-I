<?php
class DAONotaPromissoria
{
    public function inclui(NotaPromissoria $notaPromissoria)
    {
        $sql = 'insert 
                into notaPromissoria (idFornecedor, preco, dataCompra, dataPagamento) 
                values (?, ?, ?, ?)';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $notaPromissoria->getIdFornecedor());
        $pst->bindValue(2, $notaPromissoria->getPreco());
        $pst->bindValue(3, $notaPromissoria->getDataCompra());
        $pst->bindValue(4, $notaPromissoria->getDataPagamento());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function exclui(NotaPromissoria $notaPromissoria)
    {
        $sql = 'delete 
                from notaPromissoria 
                where idNotaPromissoria = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $notaPromissoria->getIdNotaPromissoria());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function altera(NotaPromissoria $notaPromissoria)
    {
        $sql = 'update notaPromissoria 
                set idFornecedor = ?, preco = ?, dataCompra = ?, dataPagamento = ?
                where idNotaPromissoria = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $notaPromissoria->getIdFornecedor());
        $pst->bindValue(2, $notaPromissoria->getPreco());
        $pst->bindValue(3, $notaPromissoria->getDataCompra());
        $pst->bindValue(4, $notaPromissoria->getDataPagamento());
        $pst->bindValue(5, $notaPromissoria->getIdNotaPromissoria());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function listaAtivas()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('
            select idNotaPromissoria, f.nome, preco, dataCompra, dataPagamento
            from notapromissoria as np
            inner join fornecedor as f on f.idFornecedor = np.idFornecedor
            where np.ativa = 1;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function listaInativas()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('
            select idNotaPromissoria, f.nome, preco, dataCompra, dataPagamento
            from notapromissoria as np
            inner join fornecedor as f on f.idFornecedor = np.idFornecedor
            where np.ativa = 0;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function localiza($id)
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from notaPromissoria where idNotaPromissoria = ?;');
        $pst->bindValue(1, $id);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function paga($id)
    {
        $sql = 'update notapromissoria
                set ativa = 0
                where idNotaPromissoria = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
