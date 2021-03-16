<?php
class Proyek extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $data = array(
            'title' => 'Daftar Pemesanan | DingDeco'
        );
        //Change this 
        $this->template->view('proyek/VDaftarPemesanan', $data);
    }
}
