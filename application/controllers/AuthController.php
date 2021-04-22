<?php
class AuthController extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function vLogin(){
        $this->load->view('admin/VLogin');
    }
}