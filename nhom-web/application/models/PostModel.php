<?php

    class PostModel extends DModel{
        
        public function __construct(){
            parent::__construct();
        }
        
        
        public function GetPost($table){
            $sql = "SELECT * FROM $table ORDER BY post_id DESC";
            return $this->db->select($sql);
         
        }
        
        public function PostDetail($table,$con){
            $sql = "SELECT * FROM $table WHERE $con ";
            
            return $this->db->select($sql);     
        }
              
    }


?>


