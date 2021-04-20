<?php

class InventarisController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Inventaris');
        $this->load->library(['upload', 'image_lib']);
    }
    public function vInventaris(){
        $data['title']      = 'Inventaris Barang | SYMA Decoration';
        $data['inventaris'] = $this->Inventaris->getAll();

        $this->template->view('barang/VInventarisBarang', $data);
    }
    public function store(){
        $datas                      = $_POST;
        $datas['IMG_INVENTARIS']    = $this->upload_image();
        unset($datas['image']);

        $this->Inventaris->insert($datas);
        redirect('inventaris');
    }
    public function edit(){
        $datas                  = $_POST;
        $datas['updated_at']    = date('Y-m-d H:i:s');
        $this->Inventaris->update($datas);

        redirect('inventaris');
    }
    public function ajxGet(){
        $datas      = $_POST;
        $inventaris = $this->Inventaris->get($datas);
        echo json_encode($inventaris);
    }
    function upload_image(){
        $path                       = 'uploads/inventaris/';
        $config['upload_path']      = $path; //path folder
        $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['file_name']        = md5(time()); 
 
        $this->upload->initialize($config);
        if(!empty($_FILES['image']['name'])){
 
            if ($this->upload->do_upload('image')){
                $gbr    = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']=$path.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= true;
                // $config['quality']= '100%';
                $config['width']= 600;
                // $config['height']= 400;
                $config['new_image']= $path.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $gambar=$gbr['file_name'];

                return base_url($path.$gambar);
            }
                      
        }else{
            print_r($this->upload->display_errors());
            // return base_url('images/ttd/default.png');
        }         
    }
}