<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Pemesanan extends RestController
{

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }

    public function noPemesanan_get()
    {
        $noPemesanan = $this->db->select('NOMOR_PEMESANAN')->order_by('NOMOR_PEMESANAN', 'asc')->get('pemesanan')->result();
        
        if($noPemesanan != null){
            $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $noPemesanan], 200);
        }else{
            $this->response(['status' => false, 'message' => 'Tidak ada pemesanan tersedia'], 404);
        } 
    }

    public function idKlien_get()
    {
        $idklien = $this->db->select('ID_KLIEN')->order_by('ID_KLIEN', 'asc')->get('klien')->result();
        $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $idklien], 200);
    }

    public function idPengguna_get()
    {
        $idpengguna = $this->db->select('ID_PENGGUNA')->order_by('ID_PENGGUNA', 'asc')->get('pengguna')->result();
        $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $idpengguna], 200);
    }

    public function idPaket_get()
    {
        $idpaket = $this->db->select('ID_PAKET')->order_by('ID_PAKET', 'asc')->get('paket')->result();
        $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $idpaket], 200);
    }

    public function index_get()
    {
        $this->db->select('NOMOR_PEMESANAN, TELP_KLIEN, ALAMAT_PEMESANAN, TGLACARA_PEMESANAN, STATUS_PEMESANAN')->order_by('p.created_at', 'desc');
        $this->db->from('pemesanan p');
        $this->db->join('klien k', 'k.ID_KLIEN = p.ID_KLIEN');
        $query = $this->db->get();
        $pemesanan = $query->result();

        if ($pemesanan != null) {
            $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $pemesanan], 200);
        } else {
            $this->response(['status' => false, 'message' => 'Data Pemesanan tidak ditemukan'], 404);
        }
    }

    public function tambah_post()
    {
        $param = $this->post();
        if (!empty($param['idKlien']) && !empty($param['idPengguna']) && !empty($param['idPaket']) && !empty($param['uangmuka']) && !empty($param['biaya']) && !empty($param['deskripsi']) && !empty($param['alamat']) && !empty($param['tanggal'])) {
            $idKlien = $this->db->get_where('klien', ['ID_KLIEN' => $param['idKlien']])->row();
            $idPengguna = $this->db->get_where('pengguna', ['ID_PENGGUNA' => $param['idPengguna']])->row();
            $idPaket = $this->db->get_where('paket', ['ID_PAKET' => $param['idPaket']])->row();

            if ($idKlien != null  && $idPengguna != null && $idPaket != null) {
                $storePemesanan['NOMOR_PEMESANAN']          = date('YmdHis');
                $storePemesanan['ID_KLIEN']                 = $param['idKlien'];
                $storePemesanan['ID_PENGGUNA']              = $param['idPengguna'];
                $storePemesanan['ID_PAKET']                 = $param['idPaket'];
                $storePemesanan['UANGMUKA_PEMESANAN']       = $param['uangmuka'];
                $storePemesanan['BIAYA_PEMESANAN']          = $param['biaya'];
                $storePemesanan['DESKRIPSI_PEMESANAN']      = $param['deskripsi'];
                $storePemesanan['ALAMAT_PEMESANAN']         = $param['alamat'];
                $storePemesanan['TGLACARA_PEMESANAN']       = $param['tanggal'];
                $this->db->insert('pemesanan', $storePemesanan);
                
                $this->response(['status' => true, 'message' => 'Data berhasil ditambahkan'], 200);
            } else {
                $this->response(['status' => false, 'message' => 'ID tidak boleh kosong'], 404);
            }
        } else {
            $this->response(['status' => false, 'message' => 'Parameter tidak cocok'], 200);
        }
    }

    public function detail_get($noPemesanan){
        $pemesanan = $this->db->get_where('pemesanan', ['NOMOR_PEMESANAN' => $noPemesanan])->row();
        if($pemesanan != null){
            $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $pemesanan], 200);
        }else{
            $this->response(['status' => false, 'message' => 'Data tidak ditemukan', 'data' => $pemesanan], 404);
        }
    }
    
    public function edit_put(){
        $param = $this->put();
        if (!empty($param['noPemesanan']) && !empty($param['idKlien']) && !empty($param['idPengguna']) && !empty($param['idPaket']) && !empty($param['uangmuka']) && !empty($param['biaya']) && !empty($param['deskripsi']) && !empty($param['alamat']) && !empty($param['tanggal'])) {
            $noPemesanan = $this->db->get_where('pemesanan', ['NOMOR_PEMESANAN' => $param['noPemesanan']])->row();
            $idKlien = $this->db->get_where('klien', ['ID_KLIEN' => $param['idKlien']])->row();
            $idPengguna = $this->db->get_where('pengguna', ['ID_PENGGUNA' => $param['idPengguna']])->row();
            $idPaket = $this->db->get_where('paket', ['ID_PAKET' => $param['idPaket']])->row();

            if($noPemesanan && $idKlien && $idPengguna && $idPaket != null){
                $storePemesanan['ID_KLIEN']                 = $param['idKlien'];
                $storePemesanan['ID_PENGGUNA']              = $param['idPengguna'];
                $storePemesanan['ID_PAKET']                 = $param['idPaket'];
                $storePemesanan['UANGMUKA_PEMESANAN']       = $param['uangmuka'];
                $storePemesanan['BIAYA_PEMESANAN']          = $param['biaya'];
                $storePemesanan['DESKRIPSI_PEMESANAN']      = $param['deskripsi'];
                $storePemesanan['ALAMAT_PEMESANAN']         = $param['alamat'];
                $storePemesanan['TGLACARA_PEMESANAN']       = $param['tanggal'];
                $storePemesanan['updated_at']               = date('Y-m-d H:i:s');
                $this->db->where('NOMOR_PEMESANAN', $param['noPemesanan'])->update('pemesanan', $storePemesanan);

                $this->response(['status' => true, 'message' => 'Data berhasil diubah'], 200);
            }else{
                $this->response(['status' => false, 'message' => 'ID tidak ditemukan'], 404);
            }
        }else{
            $this->response(['status' => false, 'message' => 'Parameter tidak cocok'], 200);
        }
    }
}
