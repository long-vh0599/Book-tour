<?php
    class CProduct extends DController{

        public function __construct(){
            $data = array();
            parent::__construct();
        }
        public function InLand(){
            $table = 'product';
            $productModel =  $this->load->model('ProductModel');
            $data['product_in'] = $productModel->GetAllIn($table);

            $this->load->view('header');
            $this->load->view('inland', $data);
            $this->load->view('footer');
            
        }
        public function OutLand(){
            $table = 'product';
            $productModel =  $this->load->model('ProductModel');
            $data['product_out'] = $productModel->GetAllOut($table);

            $this->load->view('header');
            $this->load->view('outland', $data);
            $this->load->view('footer');
            
        }
        // product detail 
        public function ProductDetail($id){
            $table = 'product';
            $productModel =  $this->load->model('ProductModel');
           // $con = "product_id = '$id'";
            $data['productdetail'] = $productModel->GetProductDetail($table,$id);
 
            $table_com = 'comment';
            $comModel =  $this->load->model('CommentModel');
            $data['comment'] = $comModel->GetCom($table_com,$id);
            
            $this->load->view('header');
            $this->load->view('product_detail', $data);
            $this->load->view('comment', $data);
            $this->load->view('footer');
        } 
 
        public function ProductBySearchIn(){
            $table = 'product';
            $start = $_POST['place'];
            $price1 = $_POST['price1'];
            $price2 = $_POST['price2'];
 
            $productModel =  $this->load->model('ProductModel');
            $con = "prd_start = '$start' AND prd_price > '$price1' AND prd_price <= '$price2'";
            $data['productsearch'] = $productModel->GetBySearchIn($table,$con);
 
            $this->load->view('header');
            $this->load->view('search_in', $data);
            $this->load->view('footer');
        }
 
        public function ProductBySearchOut(){
            $table = 'product';
            $start = $_POST['place'];
            $price1 = $_POST['price1'];
            $price2 = $_POST['price2'];
 
            $productModel =  $this->load->model('ProductModel');
            $con = "prd_start = '$start' AND prd_price > '$price1' AND prd_price <= '$price2'";
            $data['productsearch'] = $productModel->GetBySearchOut($table,$con);
 
            $this->load->view('header');
            $this->load->view('search_out', $data);
            $this->load->view('footer');
        }

        public function ProductDel(){
            session_start();
            $prd_id = $_GET['prd_id'];
 
            unset($_SESSION['cart'][$prd_id]);
            if(count($_SESSION['cart']) == 0){
                unset($_SESSION['cart']);
            }
 
            $this->load->view('header');
            $this->load->view('cart');
            $this->load->view('footer');
        }
 
        public function ProductAdd($id){
            $table = 'product';
            $productModel =  $this->load->model('ProductModel');
            $data['cartdetail'] = $productModel->GetProductDetail($table,$id);
 
            $this->load->view('header');
            $this->load->view('cart',$data);
            $this->load->view('footer');
        }
    }
?>
