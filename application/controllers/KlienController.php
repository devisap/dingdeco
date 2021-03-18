<?php
    class KlienController extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('Klien');
        }

        public function vKlien(){
            $data['title']  = 'Daftar Klien | DingDeco';
            $data['kliens'] = $this->Klien->getAll();
            
            //Change this 
            $this->template->view('klien/VDaftarKlien', $data);
        }


        public function store(){
            $dataStore = $_POST;
            $this->Klien->insert($dataStore);
            redirect('klien');
        }

        public function edit(){
            $dataEdit               = $_POST;
            $dataEdit['updated_at'] = date('Y-m-d H:i:s');
            $this->Klien->update($dataEdit);

            redirect('klien');
        }

        public function ajxGet(){
            $data['filter'] = 'ID_KLIEN = '.$_POST['ID_KLIEN'];
            echo json_encode($this->Klien->get($data));
        }

        public function changeStatus(){
            $data['filter'] = 'ID_KLIEN = '.$_POST['ID_KLIEN'];
            $klien = $this->Klien->get($data);

            if($klien[0]->deleted_at != null){
                $this->Klien->update(['ID_KLIEN' => $klien[0]->ID_KLIEN, 'deleted_at' => null]);
            }else{
                $this->Klien->update(['ID_KLIEN' => $klien[0]->ID_KLIEN, 'deleted_at' => date('Y-m-d H:i:s')]);
            }
            redirect('klien');
        }
    }
