<?php
class Fiado 
{
    private $idFiado;
    private $idProduto;
    private $cliente;
    private $valor;
    private $dataInicial;
    private $dataFinal;

    public function __construct()
    {
        
    }

    public function getIdFiado()
    {
        return $this->idFiado;
    }

    public function setIdFiado($idFiado)
    {
        $this->idFiado = $idFiado;

        return $this;
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