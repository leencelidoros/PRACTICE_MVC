<?php

class Controller{

    public function _construct(){

    }


    public function index(){
        $this->view->insert_user($username,$email,$phonenumber,$password);
    }
}