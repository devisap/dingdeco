<?php
    class HomeController extends CI_Controller{
        public function index(){
            $data = array(
                'title' => 'Landing Page | SYMA Decoration'
            );
            $this->load->view('landingpage/VHome');
        }
        public function vPaket(){
            $data = array(
                'title' => 'Landing Page | SYMA Decoration'
            );
            $this->load->view('landingpage/VPaketLanding');
        }
        public function vOrder(){
            $data = array(
                'title' => 'Landing Page | SYMA Decoration'
            );
            $this->load->view('landingpage/VRegistrasiLanding');
        }
    }
?>