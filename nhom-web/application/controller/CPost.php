<?php

    class CPost extends DController{

        public function __construct(){
            $data = array();
            parent::__construct();
        }
        public function index(){
            $this->HandBook();
        }
        public function HandBook(){
            $table = 'posts';
            $postModel =  $this->load->model('PostModel');
            $data['posts'] = $postModel->GetPost($table);

            $this->load->view('header');
            $this->load->view('handbook', $data);
            $this->load->view('footer');
        }

        public function HandBookDetail($id){
            $table = 'posts';
            $postModel =  $this->load->model('PostModel');
            $con = "post_id = '$id'";
            $data['postdetail'] = $postModel->PostDetail($table,$con);

            $this->load->view('header');
            $this->load->view('post_detail', $data);
            $this->load->view('footer');
        }
    }


?>