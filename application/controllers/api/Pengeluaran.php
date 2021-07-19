<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Pengeluaran extends RestController{
    public function noPemesanan_get(){
        $pemesanans = $this->db->select('NOMOR_PEMESANAN')->order_by('NOMOR_PEMESANAN', 'asc')->get('pemesanan')->result();
        $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $pemesanans], 200);
    }

    public function index_get(){
        $pengeluarans = $this->db->get('pengeluaran')->result();
        if($pengeluarans != null){
            $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $pengeluarans], 200);
        }else{
            $this->response(['status' => false, 'message' => 'Data tidak ditemukan', 'data' => $pengeluarans], 200);
        }
    }
    
    public function tambah_post(){
        $param = $this->post();
        if(!empty($param['noPemesanan']) && !empty($param['tgl']) && !empty($param['jml']) && !empty($param['ket'])){
            $pemesanan = $this->db->get_where('pemesanan', ['NOMOR_PEMESANAN' => $param['noPemesanan']])->row();
            if($pemesanan != null){
                $dataStore['NOMOR_PENGELUARAN']       = 'PENG_'.date('YmdHis');
                $dataStore['NOMOR_PEMESANAN']       = $param['noPemesanan'];
                $dataStore['TGLMASUK_PENGELUARAN']    = $param['tgl'];
                $dataStore['JML_PENGELUARAN']         = $param['jml'];
                $dataStore['KETERANGAN_PENGELUARAN']  = $param['ket'];
                $this->db->insert('pengeluaran', $dataStore);

                $this->response(['status' => true, 'message' => 'Data berhasil ditambahkan'], 200);
            }else{
                $this->response(['status' => false, 'message' => 'Nomor pemesanan tidak ditemukan'], 200);
            }
        }else{
            $this->response(['status' => false, 'message' => 'Parameter tidak cocok'], 200);
        }
    }

    public function detail_get($noPengeluaran){
        $pengeluaran = $this->db->get_where('pengeluaran', ['NOMOR_PENGELUARAN' => $noPengeluaran])->row();
        if($pengeluaran != null){
            $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $pengeluaran], 200);
        }else{
            $this->response(['status' => false, 'message' => 'Data tidak ditemukan', 'data' => $pengeluaran], 200);
        }
    }

    public function filter_get(){
        $param = $this->get();  
        
        if(!empty($param['tglAwal']) && !empty($param['tglAkhir'])){
            $query = "SELECT * FROM pengeluaran WHERE NOMOR_PENGELUARAN LIKE '%".$param['noPengeluaran']."%' AND TGLMASUK_PENGELUARAN BETWEEN '".$param['tglAwal']."' AND '".$param['tglAkhir']."'";
            $pengeluaran = $this->db->query($query)->result();

            if($pengeluaran != null){
                $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $pengeluaran], 200);
            }else{
                $this->response(['status' => false, 'message' => 'Data tidak ditemukan'], 200);
            }
        }else{
            $query = "SELECT * FROM pengeluaran WHERE NOMOR_PENGELUARAN LIKE '%".$param['noPengeluaran']."%'";
            $pengeluaran = $this->db->query($query)->result();

            if($pengeluaran != null){
                $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $pengeluaran], 200);
            }else{
                $this->response(['status' => false, 'message' => 'Data tidak ditemukan'], 200);
            }  
        }                          
    }

    public function edit_put(){
        $param = $this->put();
        if(!empty($param['noPengeluaran']) && !empty($param['noPemesanan']) && !empty($param['tgl']) && !empty($param['jml']) && !empty($param['ket'])){
            $pemesanan = $this->db->get_where('pemesanan', ['NOMOR_PEMESANAN' => $param['noPemesanan']])->row();
            if($pemesanan != null){
                $dataStore['NOMOR_PEMESANAN']         = $param['noPemesanan'];
                $dataStore['TGLMASUK_PENGELUARAN']    = $param['tgl'];
                $dataStore['JML_PENGELUARAN']         = $param['jml'];
                $dataStore['KETERANGAN_PENGELUARAN']  = $param['ket'];
                $dataStore['updated_at']              = date('Y-m-d H:i:s');
                $this->db->where('NOMOR_PENGELUARAN', $param['noPengeluaran'])->update('pengeluaran', $dataStore);

                $this->response(['status' => true, 'message' => 'Data berhasil diubah'], 200);
            }else{
                $this->response(['status' => false, 'message' => 'Nomor pemesanan tidak ditemukan'], 200);
            }
        }else{
            $this->response(['status' => false, 'message' => 'Parameter tidak cocok'], 200);
        }
    }
}