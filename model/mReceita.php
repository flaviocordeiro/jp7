<?php

require_once 'db/dbConnection.php';

/**
 * Description of mReceita
 * 
 * @author flavio
 */
class mReceita extends dbConnection {
    private $idReceita;
    private $nomeCliente;
    private $descricao;
    private $preco;
    private $quantidade;
    private $enderecoLoja;
    private $nomeLoja;
    private $arquivo;
    
    public function getIdReceita() {
        return $this->idReceita;
    }

    public function setIdReceita($idReceita) {
        $this->idReceita = $idReceita;
    }

    public function getNomeCliente() {
        return $this->nomeCliente;
    }

    public function setNomeCliente($nomeCliente) {
        $this->nomeCliente = $nomeCliente;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function getEnderecoLoja() {
        return $this->enderecoLoja;
    }

    public function setEnderecoLoja($enderecoLoja) {
        $this->enderecoLoja = $enderecoLoja;
    }

    public function getNomeLoja() {
        return $this->nomeLoja;
    }

    public function setNomeLoja($nomeLoja) {
        $this->nomeLoja = $nomeLoja;
    }
    
    public function getArquivo() {
        return $this->arquivo;
    }

    public function setArquivo($arquivo) {
        $this->arquivo = $arquivo;
    }


    
    
}

?>
