<?php

    class CComment extends DController{

        public function __construct(){
            $data = array();
            parent::__construct();
        }

        public function InsertCom(){
            $name = $_POST['comm_name'];
            $mail = $_POST['comm_mail'];
            date_default_timezone_set('Asia/Bangkok');
            $comm_date = date('Y-m-d H:i:s');
            $desc = $_POST['comm_detail'];
            $id = 15;
            
            $table = "comment";
            $data = array(
                'prd_id' => $id,
                'comm_name' => $name,
                'comm_mail' => $mail,
                'comm_date' => $comm_date,
                'comm_detail' => $desc
            );
            $comModel = $this->load->model('CommentModel');
            $comModel->InsertCom($table,$data);
            
            header("Location:".BASE_URL.'/CProduct/ProductDetail');
        }
    }


?>