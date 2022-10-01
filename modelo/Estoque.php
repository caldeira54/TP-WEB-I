<?php
class Estoque
{
    private $idEstoque;
    private $dataRenovacao;
    private $quantidade;

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

    public function getDataRenovacao()
    {
        return $this->dataRenovacao;
    }

    public function setDataRenovacao($dataRenovacao)
    {
        $this->dataRenovacao = $dataRenovacao;

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
}
?>