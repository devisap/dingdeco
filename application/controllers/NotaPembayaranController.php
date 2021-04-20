<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NotaPembayaranController extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('Notapembayaran');
        $this->load->library(array('upload'));
    }
    public function vPembayaran(){
        $data['title']      = 'Nota Pembayaran | SYMA Decoration';
        $data['pembayaran']  = $this->Notapembayaran->getPembesanan();
        $data['pemesanan']  = $this->Notapembayaran->getPemesanan();
        
        $this->template->view('proyek/notapembayaran/VNotaPembayaran', $data);
    }

    public function store(){
        $dataStore = $_POST;
        $this->Notapembayaran->insert($dataStore);
        redirect('notapembayaran');
    }

    public function edit(){
        $dataEdit               = $_POST;
        $dataEdit['updated_at'] = date('Y-m-d H:i:s');
        $this->Notapembayaran->update($dataEdit);

        redirect('notapembayaran');
    }

    public function ajxGet(){
        $data['filter'] = 'NOMOR_PEMBAYARAN = '.$_POST['NOMOR_PEMBAYARAN'];
        echo json_encode($this->Notapembayaran->get($data));
    }  
    
    public function changeStatus(){
        $data['filter'] = 'NOMOR_PEMBAYARAN = '.$_POST['NOMOR_PEMBAYARAN'];
        $pembayaran = $this->Notapembayaran->get($data);

        if($pembayaran[0]->deleted_at != null){
            $this->Notapembayaran->update(['NOMOR_PEMBAYARAN' => $pembayaran[0]->NOMOR_PEMBAYARAN, 'deleted_at' => null]);
        }else{
            $this->Notapembayaran->update(['NOMOR_PEMBAYARAN' => $pembayaran[0]->NOMOR_PEMBAYARAN, 'deleted_at' => date('Y-m-d H:i:s')]);
        }
        redirect('notapembayaran');
    }
}