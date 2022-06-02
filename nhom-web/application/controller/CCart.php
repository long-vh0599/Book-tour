<?php
class CCart extends DController
{

    public function __construct()
    {
        $data = array();
        parent::__construct();
    }
    public function index()
    {
        $this->Cart();
    }
    public function Cart()
    {
        Session::init();

        $this->load->view('header');
        $this->load->view('cart');
        $this->load->view('footer');
    }
    public function Book()
    {
        Session::init();
        $table_order = "order";
        $ordermodel = $this->load->model('OrderModel');
        $name = $_POST['name'];
        $sodienthoai = $_POST['phone'];
        $email = $_POST['email'];
        $addr = $_POST['addr'];
        $order_code = rand(0, 9999);

        if (Session::get("cart") == true) {
            foreach ($_SESSION["cart"] as $key => $value) {
                $data = array(
                    'order_code' => $order_code,
                    'prd_id' => $value['prd_id'],
                    'name' => $name,
                    'sodienthoai' => $sodienthoai,
                    'email' => $email,
                    'addr' => $addr
                );
                $result_order = $ordermodel->insert_order($table_order,$data);
            }
            unset($_SESSION["cart"]);
        }
        // if($result_order){
        //     $message['msg'] = "Đặt hàng thành công";
        //     header('Location:'.BASE_URL."/CCart?msg=".urlencode(serialize($message)));
        // }

        $this->load->view('header');
        $this->load->view('success');
        $this->load->view('footer');
    }
    public function AddCart()
    {
        Session::init();

        if (isset($_SESSION["cart"])) {
            $avaiable = 0;
            foreach ($_SESSION["cart"] as $key => $value) {
                if ($_SESSION["cart"][$key]['prd_id'] == $_POST['prd_id']) {
                    $avaiable++;
                }
            }
            if ($avaiable == 0) {
                $item = array(
                    'prd_id' => $_POST["prd_id"],
                    'prd_name' => $_POST["prd_name"],
                    'prd_price' => $_POST["prd_price"],
                    'prd_image' => $_POST["prd_image"],
                    'prd_quantity' => $_POST["prd_quantity"]
                );
                $_SESSION["cart"][] = $item;
            }
        } else {
            $item = array(
                'prd_id' => $_POST["prd_id"],
                'prd_name' => $_POST["prd_name"],
                'prd_price' => $_POST["prd_price"],
                'prd_image' => $_POST["prd_image"],
                'prd_quantity' => $_POST["prd_quantity"]
            );
            $_SESSION["cart"][] = $item;
        }
        header("Location:" . BASE_URL . '/CCart');
    }
    public function DelCart($id)
    {
        Session::init();

        if (count($_SESSION["cart"]) < 2) {
            unset($_SESSION["cart"]);
        }
        
        foreach ($_SESSION["cart"] as $key => $value) {
            if ($_SESSION["cart"][$key]['prd_id'] == $id) {
                unset($_SESSION["cart"][$key]);
            }
        }


        header("Location:" . BASE_URL . '/CCart');
    }
}
