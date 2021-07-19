<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Pemasukan extends RestController{
    public function noPemesanan_get(){
        $pemesanans = $this->db->select('NOMOR_PEMESANAN')->order_by('NOMOR_PEMESANAN', 'asc')->get('pemesanan')->result();
        $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $pemesanans], 200);
    }

    public function index_get(){
        $pemasukans = $this->db->get('pemasukan')->result();
        if($pemasukans != null){
            $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $pemasukans], 200);
        }else{
            $this->response(['status' => false, 'message' => 'Data tidak ditemukan', 'data' => $pemasukans], 200);
        }
    }
    
    public function tambah_post(){
        $param = $this->post();
        if(!empty($param['noPemesanan']) && !empty($param['tgl']) && !empty($param['jml']) && !empty($param['ket'])){
            $pemesanan = $this->db->get_where('pemesanan', ['NOMOR_PEMESANAN' => $param['noPemesanan']])->row();
            if($pemesanan != null){
                $dataStore['NOMOR_PEMASUKAN']       = 'PEMA_'.date('YmdHis');
                $dataStore['NOMOR_PEMESANAN']       = $param['noPemesanan'];
                $dataStore['TGLMASUK_PEMASUKAN']    = $param['tgl'];
                $dataStore['JML_PEMASUKAN']         = $param['jml'];
                $dataStore['KETERANGAN_PEMASUKAN']  = $param['ket'];
                $this->db->insert('pemasukan', $dataStore);

                $this->response(['status' => true, 'message' => 'Data berhasil ditambahkan'], 200);
            }else{
                $this->response(['status' => false, 'message' => 'Nomor pemesanan tidak ditemukan'], 200);
            }
        }else{
            $this->response(['status' => false, 'message' => 'Parameter tidak cocok'], 200);
        }
    }

    public function detail_get($noPemasukan){
        $pemasukan = $this->db->get_where('pemasukan', ['NOMOR_PEMASUKAN' => $noPemasukan])->row();
        if($pemasukan != null){
            $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $pemasukan], 200);
        }else{
            $this->response(['status' => false, 'message' => 'Data tidak ditemukan', 'data' => $pemasukan], 200);
        }
    }

    public function filter_get(){
        $param = $this->get();  
        
        if(!empty($param['tglAwal']) && !empty($param['tglAkhir'])){
            $query = "SELECT * FROM pemasukan WHERE NOMOR_PEMASUKAN LIKE '%".$param['noPemasukan']."%' AND TGLMASUK_PEMASUKAN BETWEEN '".$param['tglAwal']."' AND '".$param['tglAkhir']."'";
            $pemasukan = $this->db->query($query)->result();

            if($pemasukan != null){
                $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $pemasukan], 200);
            }else{
                $this->response(['status' => false, 'message' => 'Data tidak ditemukan'], 200);
            }
        }else{
            $query = "SELECT * FROM pemasukan WHERE NOMOR_PEMASUKAN LIKE '%".$param['noPemasukan']."%'";
            $pemasukan = $this->db->query($query)->result();

            if($pemasukan != null){
                $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $pemasukan], 200);
            }else{
                $this->response(['status' => false, 'message' => 'Data tidak ditemukan'], 200);
            }  
        }                          
    }

    public function edit_put(){
        $param = $this->put();
        if(!empty($param['noPemasukan']) && !empty($param['noPemesanan']) && !empty($param['tgl']) && !empty($param['jml']) && !empty($param['ket'])){
            $pemesanan = $this->db->get_where('pemesanan', ['NOMOR_PEMESANAN' => $param['noPemesanan']])->row();
            if($pemesanan != null){
                $dataStore['NOMOR_PEMESANAN']       = $param['noPemesanan'];
                $dataStore['TGLMASUK_PEMASUKAN']    = $param['tgl'];
                $dataStore['JML_PEMASUKAN']         = $param['jml'];
                $dataStore['KETERANGAN_PEMASUKAN']  = $param['ket'];
                $dataStore['updated_at']            = date('Y-m-d H:i:s');
                $this->db->where('NOMOR_PEMASUKAN', $param['noPemasukan'])->update('pemasukan', $dataStore);

                $this->response(['status' => true, 'message' => 'Data berhasil diubah'], 200);
            }else{
                $this->response(['status' => false, 'message' => 'Nomor pemesanan tidak ditemukan'], 200);
            }
        }else{
            $this->response(['status' => false, 'message' => 'Parameter tidak cocok'], 200);
        }
    }
}