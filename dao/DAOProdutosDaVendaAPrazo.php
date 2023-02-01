<?php
class DAOProdutosDaVendaAPrazo
{
    public function inclui(ProdutosDaVendaAPrazo $produtosDaVendaAPrazo)
    {
        $sql = 'insert 
                into produtosDaVendaAPrazo (idVendaAPrazo, idEstoque, quantidade, valor) 
                values (?, ?, ?, ?)';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produtosDaVendaAPrazo->getIdVendaAPrazo());
        $pst->bindValue(2, $produtosDaVendaAPrazo->getIdEstoque());
        $pst->bindValue(3, $produtosDaVendaAPrazo->getQuantidade());
        $pst->bindValue(4, $produtosDaVendaAPrazo->getValor());

        if ($pst->execute()) 
        {
            return true;
        } else {
            return false;
        }
    }

    public function adicionaProutos(ProdutosDaVendaAPrazo $produtosDaVendaAPrazo)
    {
        $sql = 'update produtosdavendaaprazo as pvp
                inner join vendaAPrazo as va on va.idVendaAPrazo = pvp.idVendaAPrazo
                set pvp.quantidade = pvp.quantidade + ?, va.valor = va.valor + (? * ?)
                where pvp.idEstoque = ? and pvp.idVendaAPrazo = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produtosDaVendaAPrazo->getQuantidade());
        $pst->bindValue(2, $produtosDaVendaAPrazo->getQuantidade());
        $pst->bindValue(3, $produtosDaVendaAPrazo->getValor());
        $pst->bindValue(4, $produtosDaVendaAPrazo->getIdEstoque());
        $pst->bindValue(5, $produtosDaVendaAPrazo->getIdVendaAPrazo());

        if ($pst->execute())
        {
            return true;
        }
        else 
        {
            return false;
        }
        
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function adicionaProutosNovos(ProdutosDaVendaAPrazo $produtosDaVendaAPrazo)
    {
        $sql = 'update produtosdavendaaprazo as pvp
                inner join vendaAPrazo as va on va.idVendaAPrazo = pvp.idVendaAPrazo
                set pvp.quantidade = ?, va.valor = va.valor + (pvp.quantidade * ?)
                where pvp.idEstoque = ? and pvp.idVendaAPrazo = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produtosDaVendaAPrazo->getQuantidade());
        $pst->bindValue(2, $produtosDaVendaAPrazo->getValor());
        $pst->bindValue(3, $produtosDaVendaAPrazo->getIdEstoque());
        $pst->bindValue(4, $produtosDaVendaAPrazo->getIdVendaAPrazo());

        if ($pst->execute())
        {
            return true;
        }
        else 
        {
            return false;
        }
        
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function removeProutos(ProdutosDaVendaAPrazo $produtosDaVendaAPrazo)
    {
        $sql = 'update produtosdavendaaprazo as pvp
                inner join vendaAPrazo as va on va.idVendaAPrazo = pvp.idVendaAPrazo
                set pvp.quantidade = pvp.quantidade - ?, va.valor = va.valor - (? * ?)
                where pvp.idEstoque = ? and pvp.idVendaAPrazo = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produtosDaVendaAPrazo->getQuantidade());
        $pst->bindValue(2, $produtosDaVendaAPrazo->getQuantidade());
        $pst->bindValue(3, $produtosDaVendaAPrazo->getValor());
        $pst->bindValue(4, $produtosDaVendaAPrazo->getIdEstoque());
        $pst->bindValue(5, $produtosDaVendaAPrazo->getIdVendaAPrazo());

        if ($pst->execute())
        {
            return true;
        }
        else 
        {
            return false;
        }
        
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function exclui(ProdutosDaVendaAPrazo $produtosDaVendaAPrazo)
    {
        $sql = 'delete 
                from vendasDiarias 
                where idEstoque = ? and idVendaAPrazo = ?';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produtosDaVendaAPrazo->getIdEstoque());
        $pst->bindValue(2, $produtosDaVendaAPrazo->getIdVendaAPrazo());
        if ($pst->execute()) 
        {
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
        if ($pst->execute()) 
        {
            return true;
        } else {
            return false;
        }
    }

    public function lista($id)
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('
            select idVendaAPrazo, e.nome, pvp.quantidade, valor
            from produtosdavendaaprazo as pvp
            inner join estoque as e on e.idEstoque = pvp.idEstoque
            where idVendaAPrazo = ?;');
        $pst->bindValue(1, $id);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function baixaEstoque($id, $quantidade)
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

    public function aumentaEstoque($id, $quantidade)
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('
            update estoque
            set quantidade = quantidade + ?
            where idEstoque = ?;');
        $pst->bindValue(1, $quantidade);
        $pst->bindValue(2, $id);
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
