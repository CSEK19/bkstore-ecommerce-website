<?php

class Admin extends Controller{

    public function __construct(){
        $this->orderModel = $this->model("OrderModel");
    }

    function SayHi() {
        $revenue = $this->orderModel->getRevenue();
        $this->view("admin",[
            "revenue"=>$revenue
        ]);
    }
}

?>