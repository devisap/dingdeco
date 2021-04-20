<?php 

    class Proyek extends CI_Model{
        public function getAll(){
            // if(!empty($param['filter'])){
            //     $this->db->where($param['filter']);
            // }
            return $this->db->get('pemesanan')->result();
        }
        public function get($param){
            return $this->db->where($param['filter'])->get('pemesanan')->result();
        }
        public function insert($param){
            $this->db->insert('pemesanan', $param);
            return $this->db->insert_id();
        }
        public function update($param){
            return $this->db->where('NOMOR_PEMESANAN', $param['NOMOR_PEMESANAN'])->update('pemesanan', $param);;
        }     
        public function delete($param){
            $this->db->where($param)->delete('pemesanan');
            return true;
        }
        public function getKlien(){
            return $this->db->query("SELECT ID_KLIEN, NAMA_KLIEN FROM klien")->result();
        }
        public function getPaket(){
            return $this->db->query("SELECT ID_PAKET, NAMA_PAKET FROM paket")->result();
        }
        public function getPengguna(){
            return $this->db->query("SELECT ID_PENGGUNA, NAMA_PENGGUNA FROM pengguna WHERE ID_JABATAN = 2")->result();
        }
        public function getPemesanan(){
            return $this->db->query("SELECT * FROM pemesanan")->result();
        }
        public function getSKKFilter($param){
            return $this->db->where($param['filter'])->get('skk')->result();
        }
        public function getSKK(){
            $this->db->select('*');
            $this->db->from('skk');
            $this->db->join('pemesanan', 'skk.NOMOR_PEMESANAN = pemesanan.NOMOR_PEMESANAN');
            $this->db->join('klien', 'pemesanan.ID_KLIEN = klien.ID_KLIEN');            
            $this->db->join('pengguna', 'pemesanan.ID_PENGGUNA = pengguna.ID_PENGGUNA');
            $query = $this->db->get();
            return $query->result();
        }
        public function updateSKK($param){
            return $this->db->where('NOMOR_SKK', $param['NOMOR_SKK'])->update('skk', $param);;
        }  
        public function insertSKK($param){
            $this->db->insert('skk', $param);
            return $this->db->insert_id();
        }
        public function getFA(){
            $this->db->select('*');
            $this->db->from('pemesanan');
            $this->db->join('klien', 'pemesanan.ID_KLIEN = klien.ID_KLIEN');            
            $this->db->join('pengguna', 'pemesanan.ID_PENGGUNA = pengguna.ID_PENGGUNA');
            $query = $this->db->get();
            return $query->result();
        }
    }