<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Skk extends RestController {

    function __construct()
    {
        parent::__construct();
        $this->load->helper("url");        
        $this->load->library('form_validation');
    }

    public function index_get(){
        $this->db->select('s.NOMOR_SKK, s.NOMOR_PEMESANAN, s.PATH_SKK, k.NAMA_KLIEN, p.ALAMAT_PEMESANAN, p.BIAYA_PEMESANAN, p.TGLACARA_PEMESANAN, p.TGLSELESAI_PEMESANAN, p.STATUS_PEMESANAN');
        $this->db->from('skk s');
        $this->db->join('pemesanan p', 's.NOMOR_PEMESANAN = p.NOMOR_PEMESANAN');
        $this->db->join('klien k', 'p.ID_KLIEN = k.ID_KLIEN');       
        $skks = $this->db->get()->result();

        if($skks != null){
            $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $skks], 200);
        }else{
            $this->response(['status' => false, 'message' => 'Data klien tidak ditemukan'], 200);
        }        
    }

    public function noPemesanan_get(){
        $sql = "SELECT NOMOR_PEMESANAN FROM pemesanan WHERE NOMOR_PEMESANAN NOT IN(SELECT NOMOR_PEMESANAN FROM skk)";
        $noPemesanan = $this->db->query($sql)->result();     

        if($noPemesanan != null){
            $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $noPemesanan], 200);
        }else{
            $this->response(['status' => false, 'message' => 'Tidak ada pemesanan tersedia'], 200);
        }        
    }

    public function tambah_post(){
        $param = $this->post();        
        if(!empty('noPesanan')){                            
            $storeSkk['NOMOR_SKK']       = date('Ymds');
            $storeSkk['NOMOR_PEMESANAN'] = $param['noPesanan'];

            $resLinkGenerated = $this->ContentPdf->generateSkk(['noSkk' => $storeSkk['NOMOR_SKK'], 'noPesanan' => $storeSkk['NOMOR_PEMESANAN'], 'orientation' => 'portrait']);
            
            $storeSkk['PATH_SKK'] = base_url($resLinkGenerated);            
            $this->db->insert('skk', $storeSkk);
            
            
            $this->response(['status' => true, 'message' => 'Data berhasil ditambahkan'], 200);            
        }else{
            $this->response(['status' => false, 'message' => 'Parameter tidak cocok'], 200);
        }
    }

    public function path_get($noSkk){
        $path['link'] = $this->db->get_where('skk', ['NOMOR_SKK' => $noSkk])->row()->PATH_SKK;
        if($path['link'] != null){
            $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $path], 200);
        }else{
            $this->response(['status' => false, 'message' => 'Data tidak ditemukan'], 404);
        }
    }
    
    public function edit_put(){
        $param = $this->put();
        if(!empty('noSKK') && !empty('noPesanan')){                
            $this->db->where(['NOMOR_SKK' => $param['noSKK']])->update('skk', 
                [
                    'NOMOR_PEMESANAN'  => $param['noPesanan'],
                    'updated_at'  => date('Y-m-d H:i:s')
                ]);
                            
            $this->response(['status' => true, 'message' => 'Data berhasil diubah'], 200);            
        }else{
            $this->response(['status' => false, 'message' => 'Parameter tidak cocok'], 200);
        }
    }
}