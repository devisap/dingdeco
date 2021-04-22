<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SOPController extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('SOP');
        $this->load->library(array('upload'));
    }
    public function vSOP(){
        $data['title']      = 'SOP | SYMA Decoration';
        $data['sop']        = $this->SOP->getAll();
        $data['pengiriman'] = $this->SOP->getPengiriman();
        $data['datatable']  = $this->SOP->getItems();
        
        $this->template->view('proyek/VSOP', $data);
    }

    public function store(){
        $dataStore = $_POST;
        $dataStore['IMG1_SOP'] = $this->upload_image('foto');
        $dataStore['IMG2_SOP'] = $this->upload_image('denah');
        $this->SOP->insert($dataStore);
        redirect('sop');
    }

    public function edit(){
        $dataEdit               = $_POST;
        $dataEdit['updated_at'] = date('Y-m-d H:i:s');
        $this->SOP->update($dataEdit);

        redirect('sop');
    }

    public function ajxGet(){
        $data['filter'] = 'NOMOR_PENGIRIMAN = '.$_POST['NOMOR_PENGIRIMAN'];
        echo json_encode($this->SOP->get($data));
    }    
    function upload_image($param){
        $path                       = 'uploads/sop/';
        $config['upload_path']      = $path;
        $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp';
        $config['file_name']        = md5(time()); 
 
        $this->upload->initialize($config);
        if(!empty($_FILES[$param]['name'])){
 
            if ($this->upload->do_upload($param)){
                $gbr    = $this->upload->data();

                $config['image_library']='gd2';
                $config['source_image']=$path.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= true;
                $config['new_image']= $path.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $gambar=$gbr['file_name'];

                return base_url($path.$gambar);
            }
                      
        }else{
            print_r($this->upload->display_errors());
        }         
    }
}