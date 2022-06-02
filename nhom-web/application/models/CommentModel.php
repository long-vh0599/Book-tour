<?php

    class CommentModel extends DModel{
        
        public function __construct(){
            parent::__construct();
        }
        
        
        public function GetCom($table,$id){
            $sql = "SELECT * FROM $table WHERE prd_id = $id ORDER BY comm_id DESC";
            return $this->db->select($sql);
         
        }
        
        public function InsertCom($table,$data){
            return $this->db->insert($table,$data);    
        }
              
    }


?>


