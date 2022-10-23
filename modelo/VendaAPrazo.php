<?php
class VendaAPrazo 
{
    private $idVendaAPrazo;
    private $idEstoque;
    private $cliente;
    private $valor;
    private $dataInicial;
    private $dataFinal;

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

    public function getCliente()
    {
        return $this->cliente;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

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

    public function getDataInicial()
    {
        return $this->dataInicial;
    }

    public function setDataInicial($dataInicial)
    {
        $this->dataInicial = $dataInicial;

        return $this;
    }

    public function getDataFinal()
    {
        return $this->dataFinal;
    }

    public function setDataFinal($dataFinal)
    {
        $this->dataFinal = $dataFinal;

        return $this;
    }
}
?>