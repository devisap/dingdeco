<?php
    class NotaPengirimanController extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('NotaPengiriman');
        }
        public function vPengiriman(){
            $data['title']          = 'Nota Pengiriman | SYMA Decoration';
            $data['pengiriman']     = $this->NotaPengiriman->getAll();
            $data['pemesanan']      = $this->NotaPengiriman->getPemesanan();
            
            $this->template->view('proyek/notapengiriman/vNotaPengiriman', $data);
        }
    
        public function store(){
            $dataStore  = $_POST;
            $lastId     = $this->NotaPengiriman->getLastId();
            if($lastId != null){
                $lastId                         = str_replace('NK', '', $lastId->NOMOR_PENGIRIMAN);
                $lastId                         = (int)$lastId + 1;
                $dataStore['NOMOR_PENGIRIMAN']  = 'NK'.sprintf("%'.08d\n", $lastId);
            }else{
                $dataStore['NOMOR_PENGIRIMAN']  = 'NK00000001';
            }

            $this->NotaPengiriman->insert($dataStore);
            redirect('notapengiriman');
        }
    
        public function edit(){
            $dataEdit               = $_POST;
            $dataEdit['updated_at'] = date('Y-m-d H:i:s');
            $this->NotaPengiriman->update($dataEdit);
    
            redirect('notapengiriman');
        }
    
        public function ajxGet(){
            $data['filter'] = 'NOMOR_PENGIRIMAN = "'.$_POST['NOMOR_PENGIRIMAN'].'"';
            echo json_encode($this->NotaPengiriman->get($data));
        }  
        
        public function changeStatus(){
            $data['filter'] = 'NOMOR_PENGIRIMAN = "'.$_POST['NOMOR_PENGIRIMAN'].'"';
            $pembayaran = $this->NotaPengiriman->get($data);
    
            if($pembayaran[0]->deleted_at != null){
                $this->NotaPengiriman->update(['NOMOR_PENGIRIMAN' => $pembayaran[0]->NOMOR_PENGIRIMAN, 'deleted_at' => null]);
            }else{
                $this->NotaPengiriman->update(['NOMOR_PENGIRIMAN' => $pembayaran[0]->NOMOR_PENGIRIMAN, 'deleted_at' => date('Y-m-d H:i:s')]);
            }
            redirect('notapengiriman');
        }
    }
?>