<?php
class DAOProdutosDaVenda
{
    public function inclui(ProdutosDaVenda $produtosDaVenda)
    {
        $sql = 'insert 
                into produtosDaVenda (idEstoque, idVendaAVista, quantidade, valorUnitario) 
                values (?, ?, ?, ?)';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produtosDaVenda->getIdEstoque());
        $pst->bindValue(2, $produtosDaVenda->getIdVendaAVista());
        $pst->bindValue(3, $produtosDaVenda->getQuantidade());
        $pst->bindValue(4, $produtosDaVenda->getValor());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function exclui(ProdutosDaVenda $produtosDaVenda)
    {
        $sql = 'delete 
                from vendasDiarias 
                where idEstoque = ? and idVendaAVista = ?';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produtosDaVenda->getIdEstoque());
        $pst->bindValue(2, $produtosDaVenda->getIdVendaAVista());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function altera(ProdutosDaVenda $produtosDaVenda)
    {
        $sql = 'update 
                produtosDaVenda set quantidade = ?, valorUnitario = ?
                where idEstoque = ? and idVendaAVista = ?';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produtosDaVenda->getQuantidade());
        $pst->bindValue(2, $produtosDaVenda->getValor());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function lista($id)
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('
            select idVendaAVista, e.nome, pv.quantidade, valorUnitario
            from produtosdavenda as pv
            inner join estoque as e on e.idEstoque = pv.idEstoque
            where idVendaAVista = ?;');
        $pst->bindValue(1, $id);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function atualizaEstoque($id, $quantidade)
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('
            update estoque
            set quantidade = quantidade - ?
            where idEstoque = ?;');
        $pst->bindValue(1, $quantidade);
        $pst->bindValue(2, $id);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function localiza($idEstoque, $idVendaAVista)
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * 
                                              from produtosDaVenda
                                              where idEstoque = ? and idVendaAVista = ?;');
        $pst->bindValue(1, $idEstoque);
        $pst->bindValue(2, $idVendaAVista);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
}
