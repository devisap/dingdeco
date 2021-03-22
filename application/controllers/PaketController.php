<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PaketController extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('Paket');
        $this->load->library(array('upload'));
    }
    public function vPaket(){
        $data['title']  = 'Paket | SYMA Decoration';
        $data['paket'] = $this->Paket->getAll();
        
        //Change this 
        $this->template->view('paket/VPaket', $data);
    }

    public function store(){
        $dataStore = $_POST;
        $this->Paket->insert($dataStore);
        redirect('paket');
    }

    public function edit(){
        $dataEdit               = $_POST;
        $dataEdit['updated_at'] = date('Y-m-d H:i:s');
        $this->Paket->update($dataEdit);

        redirect('paket');
    }

    public function ajxGet(){
        $data['filter'] = 'ID_PAKET = '.$_POST['ID_PAKET'];
        echo json_encode($this->Paket->get($data));
    }
    
    public function delete(){
        $dataDelete = $_POST;
        $this->Paket->delete($dataDelete);
        redirect('paket');
    }
}