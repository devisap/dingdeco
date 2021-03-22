<?php 

    class User extends CI_Model{
        public function getAll(){
            // if(!empty($param['filter'])){
            //     $this->db->where($param['filter']);
            // }
            return $this->db->get('pengguna')->result();
        }
        public function get($param){
            return $this->db->where($param['filter'])->get('pengguna')->result();
        }
        public function insert($param){
            $this->db->insert('pengguna', $param);
            return $this->db->insert_id();
        }
        public function update($param){
            return $this->db->where('ID_PENGGUNA', $param['ID_PENGGUNA'])->update('pengguna', $param);;
        }
        public function delete($param){
            return $this->db->where($param['ID_PENGGUNA'])->delete('pengguna', $param);;
        }
    }