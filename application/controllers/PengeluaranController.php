<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PengeluaranController extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('Pengeluaran');
        $this->load->library(array('upload'));
    }
    public function vPengeluaran(){
        $data['title']      = 'Pengeluaran | SYMA Decoration';
        $data['pengeluaran']  = $this->Pengeluaran->getAll();
        $data['pemesanan']  = $this->Pengeluaran->getPemesanan();
        
        $this->template->view('proyek/VPengeluaran', $data);
    }

    public function store(){
        $dataStore = $_POST;
        $this->Pengeluaran->insert($dataStore);
        redirect('pengeluaran');
    }

    public function edit(){
        $dataEdit               = $_POST;
        $dataEdit['updated_at'] = date('Y-m-d H:i:s');
        $this->Pengeluaran->update($dataEdit);

        redirect('pengeluaran');
    }

    public function ajxGet(){
        $data['filter'] = 'NOMOR_PENGELUARAN = '.$_POST['NOMOR_PENGELUARAN'];
        echo json_encode($this->Pengeluaran->get($data));
    }    
}