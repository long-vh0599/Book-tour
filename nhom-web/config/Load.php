<?php
 
class Load{

    public function __construct(){
       
    }

    public function view($fileName, $data = false){
        if($data == true){
            extract($data);
        }
        include 'application/views/'.$fileName.'.php';
    }
    public function model($fileName){
         include 'application/models/'.$fileName.'.php';
         return new $fileName();
    }

}


?>