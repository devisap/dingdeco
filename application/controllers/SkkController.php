<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SkkController extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('Proyek');
        $this->load->library(array('upload'));
    }
    public function vSKK(){
        $data['title']      = 'Surat Kontrak Kerja | SYMA Decoration';
        $data['skk']        = $this->Proyek->getSKK();
        $data['pemesanan']  = $this->Proyek->getPemesanan();
        $data['pesanan']    = $this->Proyek->getFA();
        
        $this->template->view('proyek/VSuratKontrakKerja', $data);
    }

    public function store(){
        $dataStore = $_POST;
        $this->Proyek->insertSKK($dataStore);
        redirect('skk');
    }

    public function edit(){
        $dataEdit               = $_POST;
        $dataEdit['updated_at'] = date('Y-m-d H:i:s');
        $this->Proyek->updateSKK($dataEdit);

        redirect('skk');
    }

    public function ajxGet(){
        $data['filter'] = 'NOMOR_SKK = '.$_POST['NOMOR_SKK'];
        echo json_encode($this->Proyek->getSKKFilter($data));
    }    
}