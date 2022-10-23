<?php
class Fornecedor
{
    private $idFornecedor;
    private $nome;
    private $endereco;

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
}
?>