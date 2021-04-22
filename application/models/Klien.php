<?php 

    class Klien extends CI_Model{
        public function getAll(){
            // if(!empty($param['filter'])){
            //     $this->db->where($param['filter']);
            // }
            return $this->db->get('klien')->result();
        }
        public function get($param){
            return $this->db->where($param['filter'])->get('klien')->result();
        }
        public function insert($param){
            $this->db->insert('klien', $param);
            return $this->db->insert_id();
        }
        public function update($param){
            return $this->db->where('ID_KLIEN', $param['ID_KLIEN'])->update('klien', $param);;
        }
        public function delete($param){
            return $this->db->where($param['ID_KLIEN'])->delete('klien', $param);;
        }
    }