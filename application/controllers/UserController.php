<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('User');
        $this->load->library(array('upload'));
    }
    public function vUser(){
        $data['title']  = 'Pengguna | SYMA Decoration';
        $data['user'] = $this->User->getAll();
        
        //Change this 
        $this->template->view('pengguna/VPengguna', $data);
    }

    public function store(){
        $dataStore = $_POST;
        $this->User->insert($dataStore);
        redirect('user');
    }

    public function edit(){
        $dataEdit               = $_POST;
        $dataEdit['updated_at'] = date('Y-m-d H:i:s');
        $this->User->update($dataEdit);

        redirect('user');
    }

    public function ajxGet(){
        $data['filter'] = 'ID_PENGGUNA = '.$_POST['ID_PENGGUNA'];
        echo json_encode($this->User->get($data));
    }

    public function changeStatus(){
        $data['filter'] = 'ID_PENGGUNA = '.$_POST['ID_PENGGUNA'];
        $user = $this->User->get($data);

        if($user[0]->deleted_at != null){
            $this->User->update(['ID_PENGGUNA' => $user[0]->ID_PENGGUNA, 'deleted_at' => null]);
        }else{
            $this->User->update(['ID_PENGGUNA' => $user[0]->ID_PENGGUNA, 'deleted_at' => date('Y-m-d H:i:s')]);
        }
        redirect('user');
    }
}