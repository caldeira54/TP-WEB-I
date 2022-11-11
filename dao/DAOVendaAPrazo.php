<?php
class DAOVendaAPrazo
{
    public function inclui(VendaAPrazo $vendaAPrazo)
    {
        $sql = 'insert 
                into vendaAPrazo (idVendaAPrazo, cliente, valor, dataInicial, dataFinal) 
                values (?, ?, ?, ?, ?)';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $vendaAPrazo->getIdVendaAPrazo());
        $pst->bindValue(2, $vendaAPrazo->getCliente());
        $pst->bindValue(3, $vendaAPrazo->getValor());
        $pst->bindValue(4, $vendaAPrazo->getDataInicial());
        $pst->bindValue(5, $vendaAPrazo->getDataFinal());

        if($pst->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function exclui(VendaAPrazo $vendaAPrazo)
    {
        $sql = 'delete 
                from vendaAPrazo 
                where idVendaAPrazo = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $vendaAPrazo->getIdVendaAPrazo());
        if($pst->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function altera(VendaAPrazo $vendaAPrazo)
    {
        $sql = 'update vendaAPrazo 
                set idVendaAPrazo = ?, cliente = ?, valor = ?, dataInicial = ?, dataFinal = ?
                where idVendaAPrazo = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $vendaAPrazo->getIdVendaAPrazo());
        $pst->bindValue(2, $vendaAPrazo->getCliente());
        $pst->bindValue(3, $vendaAPrazo->getValor());
        $pst->bindValue(4, $vendaAPrazo->getDataInicial());
        $pst->bindValue(5, $vendaAPrazo->getDataFinal());
        $pst->bindValue(6, $vendaAPrazo->getIdVendaAPrazo());
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
        $pst = Conexao::getPreparedStatement('select * from vendaAPrazo;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function localiza($id)
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from vendaAPrazo where idVendaAPrazo = ?;');
        $pst->bindValue(1, $id);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
}
?>