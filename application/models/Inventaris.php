<?php 

    class Inventaris extends CI_Model{
        public function getAll(){
            // if(!empty($param['filter'])){
            //     $this->db->where($param['filter']);
            // }
            return $this->db->get('inventaris_barang')->result();
        }
        public function get($param){
            return $this->db->get_where('inventaris_barang', $param)->result();
        }
        public function insert($param){
            $this->db->insert('inventaris_barang', $param);
            return $this->db->insert_id();
        }
        public function update($param){
            return $this->db->where('ID_INVENTARIS', $param['ID_INVENTARIS'])->update('inventaris_barang', $param);;
        }
        public function delete($param){
            return $this->db->where($param['ID_INVENTARIS'])->delete('inventaris_barang', $param);;
        }
        public function getNumRows(){
            return $this->db->get('inventaris_barang')->num_rows();
        }
    }