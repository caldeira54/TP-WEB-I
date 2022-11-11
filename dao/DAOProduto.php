<?php
class DAOProduto
{
    public function inclui(Produto $produto)
    {
        $sql = 'insert 
                into produto (idEstoque, idFuncionario, preco) 
                values (?, ?, ?)';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produto->getIdEstoque());
        $pst->bindValue(2, $produto->getIdFuncionario());
        $pst->bindValue(3, $produto->getPreco());

        if($pst->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function exclui(Produto $produto)
    {
        $sql = 'delete 
                from produto 
                where idEstoque = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produto->getIdEstoque());
        if($pst->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function altera(Produto $produto)
    {
        $sql = 'update produto 
                set idFuncionario = ?, preco = ? 
                where idEstoque = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produto->getIdFuncionario());
        $pst->bindValue(2, $produto->getPreco());
        $pst->bindValue(3, $produto->getIdEstoque());
        if($pst->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function listaSimples()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from produto;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function lista()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('
            select p.idEstoque, e.nome as estoque, f.nome as funcionario, p.preco
            from produto as p
            inner join funcionario as f on f.idFuncionario = p.idFuncionario
            inner join estoque as e on e.idEstoque = p.idEstoque;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function localiza($id)
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from produto where idEstoque = ?;');
        $pst->bindValue(1, $id);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
}
?>