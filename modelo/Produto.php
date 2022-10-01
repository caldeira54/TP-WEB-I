<?php
class Produto
{
    private $idProduto;
    private $nome;
    private $precoCompra;
    private $precoVenda;
    private $idFornecedor;

    public function __construct()
    {

    }
 
    public function getIdProduto()
    {
        return $this->idProduto;
    }

    public function setIdProduto($idProduto)
    {
        $this->idProduto = $idProduto;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getPrecoCompra()
    {
        return $this->precoCompra;
    }

    public function setPrecoCompra($precoCompra)
    {
        $this->precoCompra = $precoCompra;

        return $this;
    }

    public function getPrecoVenda()
    {
        return $this->precoVenda;
    }

    public function setPrecoVenda($precoVenda)
    {
        $this->precoVenda = $precoVenda;

        return $this;
    }
 
    public function getIdFornecedor()
    {
        return $this->idFornecedor;
    }

    public function setIdFornecedor($idFornecedor)
    {
        $this->idFornecedor = $idFornecedor;

        return $this;
    }
}
?>