<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Dashboard extends RestController
{

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }

    public function daftarpemesanan_get()
    {
        $this->db->select('NOMOR_PEMESANAN, NAMA_JABATAN, NAMA_PENGGUNA, ALAMAT_PEMESANAN, TGLACARA_PEMESANAN, STATUS_PEMESANAN');
        $this->db->from('pemesanan p');
        $this->db->join('pengguna u', 'u.ID_PENGGUNA = p.ID_PENGGUNA');
        $this->db->join('jabatan j', 'j.ID_JABATAN = p.ID_PENGGUNA');
        $query = $this->db->get();
        $pemesanan = $query->result();
        
        if ($pemesanan != null) {
            $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $pemesanan], 200);
        } else {
            $this->response(['status' => false, 'message' => 'Data pemesanan tidak ditemukan'], 404);
        }
    }

    public function daftarklien_get()
    {
        // $this->db->select('NAMA_KLIEN, TELP_KLIEN, ALAMAT_KLIEN, TGLACARA_PEMESANAN','STATUS_KLIEN');
        $this->db->select('NAMA_KLIEN, TELP_KLIEN, ALAMAT_KLIEN, TGLACARA_PEMESANAN');
        $this->db->from('pemesanan p');
        $this->db->join('klien k', 'k.ID_KLIEN = p.ID_KLIEN');
        $query = $this->db->get();
        $klien = $query->result();

        if ($klien != null) {
            $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $klien], 200);
        } else {
            $this->response(['status' => false, 'message' => 'Data klien tidak ditemukan'], 404);
        }
    }

    public function jumlahpemesanan_get()
    {
        $this->db->select('NOMOR_PEMESANAN');
        $this->db->from('pemesanan');
        $query = $this->db->get();
        $hasil = $query->result();
     
        $jumlahpemesanan = [
            "message" => "Sukses",
            "jumlah pemesanan" =>count($hasil)
        ];
     
        $this->response($jumlahpemesanan, 200);
    }

    public function jumlahpemesananbaru_get()
    {
        $this->db->select('STATUS_PEMESANAN');
        $this->db->from('pemesanan');
        $this->db->where('STATUS_PEMESANAN', 0);
        $query = $this->db->get();
        $hasil = $query->result();
     
        $jmlpemesananbaru = [
            "message" => "Sukses",
            "jumlah pemesanan baru" =>count($hasil)
        ];
     
        $this->response($jmlpemesananbaru, 200);
    }

    public function jumlahpemesananproses_get()
    {

        $this->db->select('STATUS_PEMESANAN');
        $this->db->from('pemesanan');
        $this->db->where('STATUS_PEMESANAN in (2, 3, 4, 5, 6)');
        $query = $this->db->get();
        $hasil = $query->result();
     
        $jmlpemesananproses = [
            "message" => "Sukses",
            "jumlah pemesanan di proses" =>count($hasil)
        ];
     
        $this->response($jmlpemesananproses, 200);
    }

    public function jumlahpemesananselesai_get()
    {
        $this->db->select('STATUS_PEMESANAN');
        $this->db->from('pemesanan');
        $this->db->where('STATUS_PEMESANAN', 7);
        $query = $this->db->get();
        $hasil = $query->result();
     
        $jmlpemesananselesai = [
            "message" => "Sukses",
            "jumlah pemesanan selesai" =>count($hasil)
        ];
     
        $this->response($jmlpemesananselesai, 200);
    }
}
