<?php 

    class Notapembayaran extends CI_Model{
        public function getAll(){
            return $this->db->get('nota_pembayaran')->result();
        }
        public function get($param){
            return $this->db->where($param['filter'])->get('nota_pembayaran')->result();
        }
        public function insert($param){
            $this->db->insert('nota_pembayaran', $param);
            return $this->db->insert_id();
        }
        public function update($param){
            return $this->db->where('NOMOR_PEMBAYARAN', $param['NOMOR_PEMBAYARAN'])->update('nota_pembayaran', $param);;
        }     
        public function delete($param){
            $this->db->where($param)->delete('nota_pembayaran');
            return true;
        }
        public function getPemesanan(){
            return $this->db->query("SELECT * FROM pemesanan")->result();
        } 
        public function getPembesanan(){
            $this->db->select('a.NOMOR_PEMBAYARAN, a.NOMOR_PEMESANAN, a.DESKRIPSI_PEMBAYARAN, a.PATH_PEMBAYARAN, a.deleted_at, b.UANGMUKA_PEMESANAN, b.BIAYA_PEMESANAN');
            $this->db->from('nota_pembayaran a');
            $this->db->join('pemesanan b', 'a.NOMOR_PEMESANAN = b.NOMOR_PEMESANAN');   
            $query = $this->db->get();
            return $query->result();
        }     
    }