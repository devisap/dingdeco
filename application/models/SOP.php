<?php 

    class SOP extends CI_Model{
        public function getAll(){
            return $this->db->get('sop')->result();
        }
        public function get($param){
            return $this->db->where($param['filter'])->get('sop')->result();
        }
        public function insert($param){
            $this->db->insert('sop', $param);
            return $this->db->insert_id();
        }
        public function update($param){
            return $this->db->where('NOMOR_PENGIRIMAN', $param['NOMOR_PENGIRIMAN'])->update('sop', ['IMG1_SOP' => $param['IMG1_SOP'], 'IMG2_SOP' => $param['IMG2_SOP'], 'updated_at' => $param['updated_at'], 'NOMOR_PENGIRIMAN' => $param['NOMORTES']]);;
        }     
        public function delete($param){
            $this->db->where($param)->delete('sop');
            return true;
        }
        public function getPengiriman(){
            return $this->db->query("SELECT * FROM nota_pengiriman")->result();
        }      
        public function getItems(){
            $this->db->select('a.NOMOR_PENGIRIMAN, b.NOMOR_PEMESANAN, b.TGL_PENGIRIMAN, c.TGLACARA_PEMESANAN, c.ALAMAT_PEMESANAN, d.NAMA_KLIEN');
            $this->db->from('sop a');
            $this->db->join('nota_pengiriman b', 'a.NOMOR_PENGIRIMAN = b.NOMOR_PENGIRIMAN');   
            $this->db->join('pemesanan c', 'b.NOMOR_PEMESANAN = c.NOMOR_PEMESANAN');    
            $this->db->join('klien d', 'c.ID_KLIEN = d.ID_KLIEN');  
            $query = $this->db->get();
            return $query->result();
        }
    }