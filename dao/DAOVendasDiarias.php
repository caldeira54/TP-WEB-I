<?php
class DAOVendasDiarias
{
    public function inclui(VendasDiarias $vendasDiarias)
    {
        $sql = 'insert 
                into vendasDiarias (data, valor, idFuncionario) 
                values (?, ?, ?)';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $vendasDiarias->getData());
        $pst->bindValue(2, $vendasDiarias->getValor());
        $pst->bindValue(3, $vendasDiarias->getIdFuncionario());

        if($pst->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function exclui(VendasDiarias $vendasDiarias)
    {
        $sql = 'delete 
                from vendasDiarias 
                where idVendasDiarias = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $vendasDiarias->getIdVendasDiarias());
        if($pst->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function altera(VendasDiarias $vendasDiarias)
    {
        $sql = 'update 
                vendasDiarias set data = ?, valor = ?, idFuncionario = ?
                where idVendasDiarias = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $vendasDiarias->getData());
        $pst->bindValue(2, $vendasDiarias->getValor());
        $pst->bindValue(3, $vendasDiarias->getIdFuncionario());
        $pst->bindValue(4, $vendasDiarias->getIdVendasDiarias());
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
        $pst = Conexao::getPreparedStatement('
            select idVendasDiarias, f.nome, data, valor
            from vendasdiarias as vd
            inner join funcionario as f on f.idFuncionario = vd.idFuncionario;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function localiza($id)
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from vendasDiarias where idVendasDiarias = ?;');
        $pst->bindValue(1, $id);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
}
?>