<?php 

    class Pemasukan extends CI_Model{
        public function getAll(){
            return $this->db->get('pemasukan')->result();
        }
        public function get($param){
            return $this->db->where($param['filter'])->get('pemasukan')->result();
        }
        public function insert($param){
            $this->db->insert('pemasukan', $param);
            return $this->db->insert_id();
        }
        public function update($param){
            return $this->db->where('NOMOR_PEMASUKAN', $param['NOMOR_PEMASUKAN'])->update('pemasukan', $param);;
        }     
        public function delete($param){
            $this->db->where($param)->delete('pemasukan');
            return true;
        }
        public function getPemesanan(){
            return $this->db->query("SELECT * FROM pemesanan")->result();
        }      
    }