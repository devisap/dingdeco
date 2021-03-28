<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProyekController extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('Proyek');
        $this->load->library(array('upload'));
    }
    public function vPemesanan(){
        $data['title']  = 'Daftar Pemesanan | SYMA Decoration';
        $data['pesanan'] = $this->Proyek->getFA();
        $data['klien'] = $this->Proyek->getKlien();
        $data['paket'] = $this->Proyek->getPaket();
        $data['pengguna'] = $this->Proyek->getPengguna();
        
        //Change this 
        $this->template->view('proyek/VDaftarPemesanan', $data);
    }

    public function store(){
        $dataStore = $_POST;
        $this->Proyek->insert($dataStore);
        redirect('pemesanan');
    }

    public function edit(){
        $dataEdit               = $_POST;
        $dataEdit['updated_at'] = date('Y-m-d H:i:s');
        $this->Proyek->update($dataEdit);

        redirect('pemesanan');
    }

    public function ajxGet(){
        $data['filter'] = 'NOMOR_PEMESANAN = '.$_POST['NOMOR_PEMESANAN'];
        echo json_encode($this->Proyek->get($data));
    }
    
    public function delete(){
        $dataDelete = $_POST;
        $this->Proyek->delete($dataDelete);
        redirect('pemesanan');
    }
}