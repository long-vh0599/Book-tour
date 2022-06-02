<?php

    class OrderModel extends DModel{
        
        
        public function __construct(){
            parent::__construct();
        }
        public function insert_order($table_order,$data){
            return $this->db->insert($table_order,$data);
        }
        
        public function list_order($table_order){
            $sql = "SELECT * FROM $table_order ORDER BY order_id DESC";
            return $this->db->select($sql);
        }
        
        public function list_order_infor($table_order,$cond_infor){
            $sql = "SELECT * FROM $table_order WHERE $cond_infor LIMIT 1" ;
            return $this->db->select($sql);
        }
        public function order_confirm($table_order,$data,$cond){
            return $this->db->update($table_order,$data,$cond);

        }
     

    }


?>