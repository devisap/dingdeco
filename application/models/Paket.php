<?php 

    class Paket extends CI_Model{
        public function getAll(){
            // if(!empty($param['filter'])){
            //     $this->db->where($param['filter']);
            // }
            return $this->db->get('paket')->result();
        }
        public function get($param){
            return $this->db->where($param['filter'])->get('paket')->result();
        }
        public function insert($param){
            $this->db->insert('paket', $param);
            return $this->db->insert_id();
        }
        public function update($param){
            return $this->db->where('ID_PAKET', $param['ID_PAKET'])->update('paket', $param);;
        }     
        public function delete($param){
            $this->db->where($param)->delete('paket');
            return true;
        }
    }