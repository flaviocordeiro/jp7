<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dbConnection
 *
 * @author flavio
 */
class dbConnection {
    
    private $user = "root";
    private $pass = "";
    private $host = "localhost";
    private $database = "jp7";
    
    public function Connect(){
        $conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->pass);
        return $conn;
    }
    
    public function RunQuery($sql){
        $stm = $this->Connect()->prepare($sql);
//        $sth->bindValue(':colour', $colour, PDO::PARAM_STR);
        return $stm->execute();
    }
    
    public function RunSelect($sql){
        $stm = $this->Connect()->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
    
}

?>
