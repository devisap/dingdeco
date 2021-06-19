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
        // $this->db->select('NAMA_KLIEN, TELP_KLIEN, ALAMAT_KLIEN, EMAIL_KLIEN','STATUS_KLIEN');
        $this->db->select('NAMA_KLIEN, TELP_KLIEN, ALAMAT_KLIEN, EMAIL_KLIEN');
        $this->db->from('klien');
        $query = $this->db->get();
        $klien = $query->result();

        if ($klien != null) {
            $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $klien], 200);
        } else {
            $this->response(['status' => false, 'message' => 'Data klien tidak ditemukan'], 404);
        }
    }

    public function jumlah_get()
    {
        $jmlpemesanan = $this->db->get_where('pemesanan',['NOMOR_PEMESANAN'])->result();
        $jmlbaru = $this->db->get_where('pemesanan', 'STATUS_PEMESANAN = 0')->result();
        $jmlproses = $this->db->get_where('pemesanan', 'STATUS_PEMESANAN in (2, 3, 4, 5, 6)')->result();
        $jmlselesai = $this->db->get_where('pemesanan', 'STATUS_PEMESANAN = 7')->result();

        $response = [
            'jumlah pemesanan' => '' . count($jmlpemesanan),
            'jumlah pemesanan baru' => '' .count($jmlbaru),
            'jumlah pemesanan proses' => '' .count($jmlproses),
            'jumlah pemesanan selesai' => '' .count($jmlselesai)
        ];
     
        $this->response(['status' => true, "message" => "Sukses", 'data' => $response], 200);

    }

}
