<?php

    class ProductModel extends DModel{
        
        public function __construct(){
            parent::__construct();
        }
        
        // product
        public function GetProductDetail($table,$id){
            $sql = "SELECT * FROM $table WHERE prd_id = $id";
            return $this->db->select($sql);
         
        }
        public function GetAllIn($table){
            $sql = "SELECT * FROM $table  WHERE cat_id = 1 ORDER BY prd_id DESC";
            return $this->db->select($sql);
         
        }
        public function GetAllOut($table){
            $sql = "SELECT * FROM $table  WHERE cat_id = 2 ORDER BY prd_id DESC";
            return $this->db->select($sql);
         
        }
        public function GetAllFavr($table){
            $sql = "SELECT * FROM $table  WHERE prd_status = 1 ORDER BY prd_id DESC";
            return $this->db->select($sql);
         
        }
        public function GetAllSale($table){
            $sql = "SELECT * FROM $table  WHERE prd_status = 2 ORDER BY prd_id DESC";
            return $this->db->select($sql);
         
        }
        public function GetBySearchIn($table, $con){
            $sql = "SELECT * FROM $table WHERE cat_id = 1 AND $con";
            return $this->db->select($sql);
        }
 
        public function GetBySearchOut($table, $con){
            $sql = "SELECT * FROM $table WHERE cat_id = 2 AND $con";
            return $this->db->select($sql);
        }
    }


?>


