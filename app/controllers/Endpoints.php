<?php
  class Endpoints extends Controller {
    public function __construct(){

	      $this->endpoint = $this->model("Endpoint");     

    }
    
   public function addStrain(){
     if($_SERVER["REQUEST_METHOD"] == "POST"){
          $this->endpoint->insertStrain($_POST);
     }
}

     public function addShop(){
      if($_SERVER["REQUEST_METHOD"] == "POST"){
           $this->endpoint->insertShop($_POST);
      }

   }


  }
