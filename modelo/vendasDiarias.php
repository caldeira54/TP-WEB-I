<?php
class VendasDiarias
{
    private $idVendasDiarias;
    private $data;
    private $valor;
    private $idFuncionario;

    public function __construct()
    {
        
    }

    public function getIdVendasDiarias()
    {
        return $this->idVendasDiarias;
    }

    public function setIdVendasDiarias($idVendasDiarias)
    {
        $this->idVendasDiarias = $idVendasDiarias;

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

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    public function getIdFuncionario()
    {
        return $this->idFuncionario;
    }

    public function setIdFuncionario($idFuncionario)
    {
        $this->idFuncionario = $idFuncionario;

        return $this;
    }
}
?>