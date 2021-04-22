<?php
    class NotaPengirimanController extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model(array('NotaPengiriman','Inventaris'));
        }
        public function vPengiriman(){
            $data['title']          = 'Nota Pengiriman | SYMA Decoration';
            $data['pengiriman']     = $this->NotaPengiriman->getAll();
            $data['pemesanan']      = $this->NotaPengiriman->getPemesanan();
            
            $this->template->view('proyek/notapengiriman/VNotaPengiriman', $data);
        }
        public function vManage($id){
            $data['title']          = 'Nota Pengiriman | SYMA Decoration';
            $data['barang']         = $this->NotaPengiriman->getDetail(['NOMOR_PENGIRIMAN' => $id]);
            $data['inventaris']     = $this->Inventaris->getAll();
            $data['numRows']        = $this->NotaPengiriman->getDetailNumRows(['NOMOR_PENGIRIMAN' => $id]);
            $data['noPengiriman']   = $id;
            
            $this->template->view('proyek/notapengiriman/VTambahBarangPengiriman', $data);
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
            echo json_encode($this->NotaPengiriman->get(['NOMOR_PENGIRIMAN' => $_POST['NOMOR_PENGIRIMAN']]));
        } 
        public function ajxManageGet(){
            $data['barang']         = $this->NotaPengiriman->getDetail(['NOMOR_PENGIRIMAN' => $_POST['NOMOR_PENGIRIMAN']]);
            $data['inventaris']     = $this->Inventaris->getAll();
            echo json_encode($data);
        }

        public function set($id){
            $datas = $_POST;
            print_r($datas['FORM']);
        }
        
        public function changeStatus(){
            $pembayaran = $this->NotaPengiriman->get(['NOMOR_PENGIRIMAN' => $_POST['NOMOR_PENGIRIMAN']]);
    
            if($pembayaran[0]->deleted_at != null){
                $this->NotaPengiriman->update(['NOMOR_PENGIRIMAN' => $pembayaran[0]->NOMOR_PENGIRIMAN, 'deleted_at' => null]);
            }else{
                $this->NotaPengiriman->update(['NOMOR_PENGIRIMAN' => $pembayaran[0]->NOMOR_PENGIRIMAN, 'deleted_at' => date('Y-m-d H:i:s')]);
            }
            redirect('notapengiriman');
        }
        
    }
?>