<?php

class User{
    private $db;

    public function __construct(){
	    $this->db = new Database;
    }


    public function createUser($data){
        $this->db->query("
        INSERT INTO users (firstname, 
        lastname, 
        email, 
        password, 
        created, 
        modified
        ) VALUES (
            :firstname,
            :lastname,
            :email,
            :password,
            :created,
            :modified
        )");
        
        $this->db->bind(":firstname", $data['firstname']);
        $this->db->bind(":lastname", $data['lastname']);
        $this->db->bind(":email", $data['email']);
        $this->db->bind(":password", $data['password']);
        $this->db->bind(":created", $data['created']);
        $this->db->bind(":modified", $data['modified']);
        
       

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

}



?>
