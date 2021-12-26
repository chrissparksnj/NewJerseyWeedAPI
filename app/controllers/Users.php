<?php
  class Users extends Controller {
    public function __construct(){

	      $this->userModel = $this->model("user");  

    }
    
    public function register(){
      if($_SERVER["REQUEST_METHOD"] == "POST"){
        
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

          
      }
    }
  }
