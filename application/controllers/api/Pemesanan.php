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
        $this->db->select('p.NOMOR_PEMESANAN, p2.NAMA_PENGGUNA, k.NAMA_KLIEN, k.TELP_KLIEN, p.ALAMAT_PEMESANAN, p.TGLACARA_PEMESANAN, p.STATUS_PEMESANAN')->order_by('p.created_at', 'desc');
        $this->db->from('pemesanan p');
        $this->db->join('pengguna p2', 'p2.ID_PENGGUNA = p.ID_PENGGUNA');
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

                $resLinkGenerated = $this->ContentPdf->generate(['idPemesanan' => $storePemesanan['NOMOR_PEMESANAN'], 'idKlien' => $storePemesanan['ID_KLIEN'], 'idPaket' => $storePemesanan['ID_PAKET'], 'orientation' => 'portrait']);
                $this->db->where('NOMOR_PEMESANAN', $storePemesanan['NOMOR_PEMESANAN'])->update('pemesanan', ['PATH_PEMESANAN' => base_url($resLinkGenerated)]);
                
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

    public function path_get($noPemesanan){
        $path['link'] = $this->db->get_where('pemesanan', ['NOMOR_PEMESANAN' => $noPemesanan])->row()->PATH_PEMESANAN;
        if($path['link'] != null){
            $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $path], 200);
        }else{
            $this->response(['status' => false, 'message' => 'Data tidak ditemukan'], 404);
        }
    }

    public function filter_get(){
        $param = $this->get();  
        //0 = show all, 1 = baru, 2 = cek lokasi, 3 = booking, dst
        if($param['status'] == 0){
            $query = "SELECT * FROM pemesanan WHERE NOMOR_PEMESANAN LIKE '%".$param['noPesanan']."%'";
            $pesanan = $this->db->query($query)->result();

            if($pesanan != null){
                $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $pesanan], 200);
            }else{
                $this->response(['status' => false, 'message' => 'Data pemesanan tidak ditemukan'], 200);
            };
        }else if($param['status'] == 1){
            $query = "SELECT * FROM pemesanan WHERE NOMOR_PEMESANAN LIKE '%".$param['noPesanan']."%' AND STATUS_PEMESANAN = 0";
            $pesanan = $this->db->query($query)->result();

            if($pesanan != null){
                $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $pesanan], 200);
            }else{
                $this->response(['status' => false, 'message' => 'Data pemesanan tidak ditemukan'], 200);
            };
        }else if($param['status'] == 2){
            $query = "SELECT * FROM pemesanan WHERE NOMOR_PEMESANAN LIKE '%".$param['noPesanan']."%' AND STATUS_PEMESANAN = 1";
            $pesanan = $this->db->query($query)->result();

            if($pesanan != null){
                $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $pesanan], 200);
            }else{
                $this->response(['status' => false, 'message' => 'Data pemesanan tidak ditemukan'], 200);
            };
        }else if($param['status'] == 3){
            $query = "SELECT * FROM pemesanan WHERE NOMOR_PEMESANAN LIKE '%".$param['noPesanan']."%' AND STATUS_PEMESANAN = 2";
            $pesanan = $this->db->query($query)->result();

            if($pesanan != null){
                $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $pesanan], 200);
            }else{
                $this->response(['status' => false, 'message' => 'Data pemesanan tidak ditemukan'], 200);
            };
        }else if($param['status'] == 4){
            $query = "SELECT * FROM pemesanan WHERE NOMOR_PEMESANAN LIKE '%".$param['noPesanan']."%' AND STATUS_PEMESANAN = 3";
            $pesanan = $this->db->query($query)->result();

            if($pesanan != null){
                $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $pesanan], 200);
            }else{
                $this->response(['status' => false, 'message' => 'Data pemesanan tidak ditemukan'], 200);
            };
        }else if($param['status'] == 5){
            $query = "SELECT * FROM pemesanan WHERE NOMOR_PEMESANAN LIKE '%".$param['noPesanan']."%' AND STATUS_PEMESANAN = 4";
            $pesanan = $this->db->query($query)->result();

            if($pesanan != null){
                $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $pesanan], 200);
            }else{
                $this->response(['status' => false, 'message' => 'Data pemesanan tidak ditemukan'], 200);
            };
        }else if($param['status'] == 6){
            $query = "SELECT * FROM pemesanan WHERE NOMOR_PEMESANAN LIKE '%".$param['noPesanan']."%' AND STATUS_PEMESANAN = 5";
            $pesanan = $this->db->query($query)->result();

            if($pesanan != null){
                $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $pesanan], 200);
            }else{
                $this->response(['status' => false, 'message' => 'Data pemesanan tidak ditemukan'], 200);
            };
        }else if($param['status'] == 7){
            $query = "SELECT * FROM pemesanan WHERE NOMOR_PEMESANAN LIKE '%".$param['noPesanan']."%' AND STATUS_PEMESANAN = 6";
            $pesanan = $this->db->query($query)->result();

            if($pesanan != null){
                $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $pesanan], 200);
            }else{
                $this->response(['status' => false, 'message' => 'Data pemesanan tidak ditemukan'], 200);
            };
        }else if($param['status'] == 8){
            $query = "SELECT * FROM pemesanan WHERE NOMOR_PEMESANAN LIKE '%".$param['noPesanan']."%' AND STATUS_PEMESANAN = 7";
            $pesanan = $this->db->query($query)->result();

            if($pesanan != null){
                $this->response(['status' => true, 'message' => 'Data berhasil ditemukan', 'data' => $pesanan], 200);
            }else{
                $this->response(['status' => false, 'message' => 'Data pemesanan tidak ditemukan'], 200);
            };
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
