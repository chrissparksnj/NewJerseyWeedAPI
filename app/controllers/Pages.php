<?php
  class Pages extends Controller {
    public function __construct(){
	    $this->pagesModel = $this->model("Page");  
      $this->productsModel = $this->model("Endpoint");   
    }
    
    public function index(){

      $data = $this->productsModel->getProducts();
     
      $this->view('pages/index', $data);
    }

    public function products(){

      $data = $this->productsModel->getProducts();

      $this->view('pages/products', $data);
    }

    public function shops(){
      
      $data  = $this->productsModel->getShops();

      $this->view("pages/shops", $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }
  }
