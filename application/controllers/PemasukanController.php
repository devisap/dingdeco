<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PemasukanController extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('Pemasukan');
        $this->load->library(array('upload'));
    }
    public function vPemasukan(){
        $data['title']      = 'Pemasukan | SYMA Decoration';
        $data['pemasukan']  = $this->Pemasukan->getAll();
        $data['pemesanan']  = $this->Pemasukan->getPemesanan();
        
        $this->template->view('proyek/VPemasukan', $data);
    }

    public function store(){
        $dataStore = $_POST;
        $this->Pemasukan->insert($dataStore);
        redirect('pemasukan');
    }

    public function edit(){
        $dataEdit               = $_POST;
        $dataEdit['updated_at'] = date('Y-m-d H:i:s');
        $this->Pemasukan->update($dataEdit);

        redirect('pemasukan');
    }

    public function ajxGet(){
        $data['filter'] = 'NOMOR_PEMASUKAN = '.$_POST['NOMOR_PEMASUKAN'];
        echo json_encode($this->Pemasukan->get($data));
    }    
}