<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Klien extends RestController {

    function __construct()
    {
        parent::__construct();
        $this->load->helper("url");        
        $this->load->library('form_validation');
    }

    public function index_get(){        
        $clients = $this->db->get('klien')->result();

        if($clients != null){
            $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $clients], 200);
        }else{
            $this->response(['status' => false, 'message' => 'Data klien tidak ditemukan'], 200);
        }        
    }

    public function tambah_post(){
        $param = $this->post();        
        if(!empty('nama') && !empty('telepon') && !empty('email') && !empty('alamat')){
            $this->form_validation->set_rules('email', 'EMAIL_KLIEN','is_unique[klien.EMAIL_KLIEN]');
            if($this->form_validation->run()==TRUE){
                
                $storeKlien['NAMA_KLIEN']      = $param['nama'];
                $storeKlien['TELP_KLIEN']      = $param['telepon'];
                $storeKlien['EMAIL_KLIEN']     = $param['email'];
                $storeKlien['ALAMAT_KLIEN']    = $param['alamat'];

                $this->db->insert('klien', $storeKlien);
                $this->response(['status' => true, 'message' => 'Data berhasil ditambahkan'], 200);
            }else{
                $this->response(['status' => false, 'message' => 'Email telah digunakan'], 200);
            }
        }else{
            $this->response(['status' => false, 'message' => 'Parameter tidak cocok'], 200);
        }
    }
    
    public function edit_put(){
        $param = $this->put();
        if(!empty('nama') && !empty('telepon') && !empty('email') && !empty('alamat')){                
            $this->db->where(['ID_KLIEN' => $param['idKlien']])->update('klien', 
                [
                    'NAMA_KLIEN'  => $param['nama'], 
                    'TELP_KLIEN'  => $param['telepon'], 
                    'EMAIL_KLIEN' => $param['email'],
                    'ALAMAT_KLIEN'=> $param['alamat'],
                    'updated_at'  => date('Y-m-d H:i:s')
                ]);
                            
            $this->response(['status' => true, 'message' => 'Data berhasil diubah'], 200);            
        }else{
            $this->response(['status' => false, 'message' => 'Parameter tidak cocok'], 200);
        }
    }
}