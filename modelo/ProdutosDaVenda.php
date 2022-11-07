<?php
class ProdutosDaVenda
{
    private $idEstoque;
    private $idVendaAVista;
    private $quantidade;
    private $valor;

    public function __construct()
    {
        
    }

    public function getIdEstoque()
    {
        return $this->idEstoque;
    }

    public function setIdEstoque($idEstoque)
    {
        $this->idEstoque = $idEstoque;

        return $this;
    }
 
    public function getIdVendaAVista()
    {
        return $this->idVendaAVista;
    }

    public function setIdVendaAVista($idVendaAVista)
    {
        $this->idVendaAVista = $idVendaAVista;

        return $this;
    }
 
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }
}
?>