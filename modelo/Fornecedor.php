<?php
class Fornecedor
{
    private $idFornecedor;
    private $nome;
    private $endereco;
    private $valorNotinha;
    private $dataCompraNotinha;
    private $dataPagamentoNotinha;

    public function __construct()
    {
        
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
 
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
 
    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }
 
    public function getValorNotinha()
    {
        return $this->valorNotinha;
    }

    public function setValorNotinha($valorNotinha)
    {
        $this->valorNotinha = $valorNotinha;

        return $this;
    }
 
    public function getDataCompraNotinha()
    {
        return $this->dataCompraNotinha;
    }

    public function setDataCompraNotinha($dataCompraNotinha)
    {
        $this->dataCompraNotinha = $dataCompraNotinha;

        return $this;
    }

    public function getDataPagamentoNotinha()
    {
        return $this->dataPagamentoNotinha;
    }

    public function setDataPagamentoNotinha($dataPagamentoNotinha)
    {
        $this->dataPagamentoNotinha = $dataPagamentoNotinha;

        return $this;
    }
}
?>