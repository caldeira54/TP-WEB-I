<?php
class ProdutosDaVendaAPrazo
{
    private $idVendaAPrazo;
    private $idEstoque;
    private $quantidade;
    private $valor;

    public function __construct()
    {

    }

    public function getIdVendaAPrazo()
    {
        return $this->idVendaAPrazo;
    }

    public function setIdVendaAPrazo($idVendaAPrazo)
    {
        $this->idVendaAPrazo = $idVendaAPrazo;

        return $this;
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