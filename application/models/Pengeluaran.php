<?php 

    class Pengeluaran extends CI_Model{
        public function getAll(){
            return $this->db->get('pengeluaran')->result();
        }
        public function get($param){
            return $this->db->where($param['filter'])->get('pengeluaran')->result();
        }
        public function insert($param){
            $this->db->insert('pengeluaran', $param);
            return $this->db->insert_id();
        }
        public function update($param){
            return $this->db->where('NOMOR_PENGELUARAN', $param['NOMOR_PENGELUARAN'])->update('pengeluaran', $param);;
        }     
        public function delete($param){
            $this->db->where($param)->delete('pengeluaran');
            return true;
        }
        public function getPemesanan(){
            return $this->db->query("SELECT * FROM pemesanan")->result();
        }      
    }