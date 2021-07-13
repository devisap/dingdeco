<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Paket extends RestController {

    function __construct()
    {
        parent::__construct();
        $this->load->helper("url");        
        $this->load->library('form_validation');
    }

    public function index_get(){        
        $paket = $this->db->get('paket')->result();

        if($paket != null){
            $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $paket], 200);
        }else{
            $this->response(['status' => false, 'message' => 'Data klien tidak ditemukan'], 200);
        }        
    }
}