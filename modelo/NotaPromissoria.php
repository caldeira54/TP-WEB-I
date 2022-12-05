<?php
class NotaPromissoria
{
    private $idNotaPromissoria;
    private $idFornecedor;
    private $preco;
    private $dataCompra;
    private $dataPagamento;
    private $ativa;

    public function getIdNotaPromissoria()
    {
        return $this->idNotaPromissoria;
    }

    public function setIdNotaPromissoria($idNotaPromissoria)
    {
        $this->idNotaPromissoria = $idNotaPromissoria;

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

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }

    public function getDataCompra()
    {
        return $this->dataCompra;
    }

    public function setDataCompra($dataCompra)
    {
        $this->dataCompra = $dataCompra;

        return $this;
    }

   public function getDataPagamento()
    {
        return $this->dataPagamento;
    }

    public function setDataPagamento($dataPagamento)
    {
        $this->dataPagamento = $dataPagamento;

        return $this;
    }

    public function getAtiva()
    {
        return $this->ativa;
    }

    public function setAtiva($ativa)
    {
        $this->ativa = $ativa;

        return $this;
    }
}
?>