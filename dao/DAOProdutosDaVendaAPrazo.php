<?php
class DAOProdutosDaVendaAPrazo
{
    public function inclui(ProdutosDaVendaAPrazo $produtosDaVendaAVista)
    {
        $sql = 'insert 
                into produtosDaVendaAVista (idEstoque, idVendaAVista, quantidade, valor) 
                values (?, ?, ?, ?)';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produtosDaVendaAVista->getIdEstoque());
        $pst->bindValue(2, $produtosDaVendaAVista->getIdVendaAPrazo());
        $pst->bindValue(3, $produtosDaVendaAVista->getQuantidade());
        $pst->bindValue(4, $produtosDaVendaAVista->getValor());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function exclui(ProdutosDaVendaAPrazo $produtosDaVendaAPrazo)
    {
        $sql = 'delete 
                from vendasDiarias 
                where idEstoque = ? and idVendaAPrazo = ?';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produtosDaVendaAPrazo->getIdEstoque());
        $pst->bindValue(2, $produtosDaVendaAPrazo->getIdVendaAPrazo());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function altera(ProdutosDaVendaAPrazo $produtosDaVendaAPrazo)
    {
        $sql = 'update 
                produtosDaVendaAPrazo set quantidade = ?, valor = ?
                where idEstoque = ? and idVendaAPrazo = ?';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produtosDaVendaAPrazo->getQuantidade());
        $pst->bindValue(2, $produtosDaVendaAPrazo->getValor());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function lista()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from produtosDaVendaAPrazo;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function listaPeloId($id)
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select *
                                              from produtosDaVenda
                                              where idVendaAVista = ?');
        $pst->bindValue(1, $id);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function localiza($idEstoque, $idVendaAPrazo)
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * 
                                              from produtosDaVenda
                                              where idEstoque = ? and idVendaAPrazo = ?;');
        $pst->bindValue(1, $idEstoque);
        $pst->bindValue(2, $idVendaAPrazo);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
}
