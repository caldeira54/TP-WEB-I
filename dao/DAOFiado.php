<?php
class DAOFiado
{
    public function inclui(Fiado $fiado)
    {
        $sql = 'insert 
                into fiado (idProduto, cliente, valor, dataInicial, dataFinal) 
                values (?, ?, ?, ?, ?)';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $fiado->getIdProduto());
        $pst->bindValue(2, $fiado->getCliente());
        $pst->bindValue(3, $fiado->getValor());
        $pst->bindValue(4, $fiado->getDataInicial());
        $pst->bindValue(5, $fiado->getDataFinal());

        if($pst->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function exclui(Fiado $fiado)
    {
        $sql = 'delete 
                from fiado 
                where idFiado = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $fiado->getIdFiado());
        if($pst->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function altera(Fiado $fiado)
    {
        $sql = 'update fiado 
                set idProduto = ?, cliente = ?, valor = ?, dataInicial = ?, dataFinal = ?
                where idFiado = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $fiado->getIdProduto());
        $pst->bindValue(2, $fiado->getCliente());
        $pst->bindValue(3, $fiado->getValor());
        $pst->bindValue(4, $fiado->getDataInicial());
        $pst->bindValue(5, $fiado->getDataFinal());
        $pst->bindValue(6, $fiado->getIdFiado());
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
        $pst = Conexao::getPreparedStatement('select * from fiado;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function localiza($id)
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from fiado where idFiado = ?;');
        $pst->bindValue(1, $id);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
}
?>