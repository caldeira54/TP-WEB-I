<?php
class DAOVendaAVista
{
    public function inclui(VendaAVista $vendaAVista)
    {
        $sql = 'insert 
                into vendaAVista (data, valor) 
                values (?, ?, ?)';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $vendaAVista->getData());
        $pst->bindValue(2, $vendaAVista->getValor());
        // $pst->bindValue(3, $vendaAVista->getIdEstoque());

        if($pst->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    // public function adicona(VendaAVista $vendaAVista)
    // {
    //     $sql = 'insert 
    //             into vendaAVista (data, valor, idEstoque) 
    //             values (?, ?, ?)';

    //     $pst = Conexao::getPreparedStatement($sql);
    //     $pst->bindValue(1, $vendaAVista->getData());
    //     $pst->bindValue(2, $vendaAVista->getValor());
    //     $pst->bindValue(3, $vendaAVista->getIdEstoque());

    //     if($pst->execute())
    //     {
    //         return true;
    //     }
    //     else
    //     {
    //         return false;
    //     }
    // }

    public function exclui(VendaAVista $vendaAVista)
    {
        $sql = 'delete 
                from vendaAVista 
                where idVendaAVista = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $vendaAVista->getIdVendaAVista());
        if($pst->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function altera(VendaAVista $vendaAVista)
    {
        $sql = 'update 
                vendaAVista set data = ?, valor = ?
                where idVendaAVista = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $vendaAVista->getData());
        $pst->bindValue(2, $vendaAVista->getValor());
        // $pst->bindValue(3, $vendaAVista->getIdEstoque());
        $pst->bindValue(3, $vendaAVista->getIdVendaAVista());

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
        $pst = Conexao::getPreparedStatement('select * from vendaAVista;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function localiza($id)
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from vendaAVista where idVendaAVista = ?;');
        $pst->bindValue(1, $id);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
}
?>