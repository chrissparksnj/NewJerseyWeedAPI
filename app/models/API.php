<?php

class Page{
    private $db;

    public function __construct(){
	$this->db = new Database;
    }

    public function insertStrain($data) {
        $this->db->query(
            "INSERT INTO flower_strains 
                    ( type_of_flower, name, thc_level, price, weight ) 
             VALUES  
                    (:type_of_flower, :name, :thc_level, :price, :weight)"
                    );
        $this->db->bind(":type_of_flower", $data['type_of_flower']);
        $this->db->bind(":name", $data['name']);
        $this->db->bind(":thc_level", $data['thc_level']);
        $this->db->bind(":name", $data['name']);
        $this->db->bind(":price", $data['price']);
        $this->db->bind("")
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }


}



?>
