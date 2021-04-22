<?php 

    class NotaPengiriman extends CI_Model{
        public function getAll(){
            return $this->db->order_by('created_at', 'desc')->get('nota_pengiriman')->result();
        }
        public function get($param){
            return $this->db->get_where('nota_pengiriman', $param)->result();
        }
        public function getLastId(){
            return $this->db->order_by('created_at', 'desc')->get_where('nota_pengiriman')->row();
        }
        public function getDetail($param){
            return $this->db->get_where('nota_pengiriman_detail', $param)->result();
        }
        public function getDetailNumRows($param){
            return $this->db->get_where('nota_pengiriman_detail', $param)->num_rows();
        }
        public function insert($param){
            $this->db->insert('nota_pengiriman', $param);
            return $this->db->insert_id();
        }
        public function update($param){
            return $this->db->where('NOMOR_PENGIRIMAN', $param['NOMOR_PENGIRIMAN'])->update('nota_pengiriman', $param);;
        }     
        public function delete($param){
            $this->db->where($param)->delete('nota_pengiriman');
            return true;
        }
        public function getPemesanan(){
            return $this->db->query("SELECT * FROM pemesanan")->result();
        } 
        public function getPembesanan(){
            $this->db->select('a.NOMOR_PEMBAYARAN, a.NOMOR_PEMESANAN, a.DESKRIPSI_PEMBAYARAN, a.PATH_PEMBAYARAN, a.deleted_at, b.UANGMUKA_PEMESANAN, b.BIAYA_PEMESANAN');
            $this->db->from('nota_pengiriman a');
            $this->db->join('pemesanan b', 'a.NOMOR_PEMESANAN = b.NOMOR_PEMESANAN');   
            $query = $this->db->get();
            return $query->result();
        }
    }