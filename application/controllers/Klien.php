<?php
class Klien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $data = array(
            'title' => 'Daftar Klien | DingDeco'
        );
        //Change this 
        $this->template->view('klien/VDaftarKlien', $data);
    }
}
