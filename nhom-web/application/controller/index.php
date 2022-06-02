<?php

    class index extends DController{

        public function __construct(){
            $data = array();
            parent::__construct();
        }
        public function index(){
            $this->homepage();
        }
        public function homepage(){
            
            $table = 'product';
            $productModel =  $this->load->model('ProductModel');
            $data['product_farv'] = $productModel->GetAllFavr($table);
            $data['product_sale'] = $productModel->GetAllSale($table);

            $this->load->view('header');
            $this->load->view('home', $data);
            $this->load->view('footer');
        }
    }


?>