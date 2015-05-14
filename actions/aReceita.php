<?php

require_once 'model/mReceita.php';

class aReceita extends mReceita {
    protected $sqlInsert = "insert into receita (nome_cliente, descricao, preco, quantidade, endereco_loja, nome_loja, arquivo) 
                            values (?, ?, ?, ?, ?, ?, ?)";
    protected $sqlUpdate = "update receita set nome_cliente='%s', descricao='%s', preco='%s', quantidade='%s',
                                               endereco_loja='%s', nome_loja='%s', arquivo='%s'
                            where id_receita='%s'";
    protected $sqlDelete = "delete from receita where id_receita='%s'";
    protected $sqlSelect = "select *, (preco * quantidade) as receitaBruta from receita where 1=1 %s %s";
    
    
    public function insert(){
//        $sql = sprintf($this->sqlInsert, $this->getNomeCliente(), 
//                                         $this->getDescricao(), 
//                                         $this->getPreco(),
//                                         $this->getQuantidade(),
//                                         $this->getEnderecoLoja(),
//                                         $this->getNomeLoja(),
//                                         $this->getArquivo());
        $conect = $this->Connect();
        $stm = $conect->prepare($this->sqlInsert);
        $stm->bindValue(1, $this->getNomeCliente());
        $stm->bindValue(2, $this->getDescricao());
        $stm->bindValue(3, $this->getPreco());
        $stm->bindValue(4, $this->getQuantidade());
        $stm->bindValue(5, $this->getEnderecoLoja());
        $stm->bindValue(6, $this->getNomeLoja());
        $stm->bindValue(7, $this->getArquivo());
        
        return $stm->execute();
    }
    
    public function update(){
        $sql = sprintf($this->sqlUpdate, $this->getNomeCliente(),
                                         $this->getDescricao(),
                                         $this->getPreco(),
                                         $this->getQuantidade(),
                                         $this->getEnderecoLoja(),
                                         $this->getNomeLoja(),
                                         $this->getArquivo());
        return $this->RunQuery($sql);
    }
    
    public function delete(){
        $sql = sprintf($this->sqlDelete, $this->getIdReceita());
        return $this->RunQuery($sql);
    }
    
    public function select($where='', $order=''){
        $sql = sprintf($this->sqlSelect, $where, $order);
        return $this->RunSelect($sql);
    }
    
    public function load(){
        $rs = $this->select(sprintf("and id_receita='%s'", $this->getIdReceita()));
        $this->setNomeCliente($rs[0]["nome_cliente"]);
        $this->setDescricao($rs[0]["descricao"]);
        $this->setPreco($rs[0]["preco"]);
        $this->setQuantidade($rs[0]["quantidade"]);
        $this->setEnderecoLoja($rs[0]["endereco_loja"]);
        $this->setNomeLoja($rs[0]["nome_loja"]);
        $this->setArquivo($rs[0]["arquivo"]);
        return $this;
    }
    
}

?>
