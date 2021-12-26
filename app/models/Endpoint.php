<?php

class Endpoint{
    private $db;

    public function __construct(){
	$this->db = new Database;
    }

    public function insertStrain($data) {
        $this->db->query(
            "INSERT INTO flower_strains 
                    ( type_of_flower, name,  price, weight, location ) 
             VALUES  
                    (:type_of_flower, :name,  :price, :weight, :location)"
                    );
        $this->db->bind(":type_of_flower", $data['type_of_flower']);
        $this->db->bind(":name", $data['name']);
        $this->db->bind(":weight", $data['weight']);
        $this->db->bind(":price", $data['price']);
        $this->db->bind(":location", $data['location']);
        if($this->db->execute()){
            echo "INSERTED";
        }else{
            echo "NOT INSERTED";
        }
    }

    public function insertShop($data) {
        $this->db->query(
            "INSERT INTO shops 
                    ( website, store_name,  phone, address) 
             VALUES  
                    (:website, :store_name,  :phone, :address)"
                    );
        $this->db->bind(":website", $data['website']);
        $this->db->bind(":store_name", $data['store_name']);
        $this->db->bind(":phone", $data['phone']);
        $this->db->bind(":address", $data['address']);

        if($this->db->execute()){
            echo "INSERTED";
        }else{
            echo "NOT INSERTED";
        }
    }

    

    public function getShops(){
        $this->db->query(
            "SELECT * FROM shops"
        );

        $results = $this->db->resultSet();
        return $results;
    }

    public function getProducts() {
        $this->db->query(
            "SELECT * FROM flower_strains"
        );
        $results = $this->db->resultSet();
        return $results;
    }


}



?>
