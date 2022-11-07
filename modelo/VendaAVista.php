<?php
class VendaAVista
{
    private $idVendaAVista;
    // private $idEstoque;
    private $valor;
    private $data;

    public function __construct()
    {
        
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

    // public function getIdEstoque()
    // {
    //     return $this->idEstoque;
    // }

    // public function setIdEstoque($idEstoque)
    // {
    //     $this->idEstoque = $idEstoque;

    //     return $this;
    // }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }
}
?>