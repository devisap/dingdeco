<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('file');
        $this->load->library('table');
        $this->load->library('upload');
        
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	//Paket
	public function paket()
    {

        $data = array(
            'title' => 'Paket | SYMA Decoration'
        );
        //Change this 
        $this->template->view('paket/VPaket', $data);
    }

	//pengguna
	public function pengguna()
    {

        $data = array(
            'title' => 'Pengguna | SYMA Decoration'
        );
        //Change this 
        $this->template->view('pengguna/VPengguna', $data);
    }

	//Landing Page
	public function landingpage()
    {

        $data = array(
            'title' => 'Landing Page | SYMA Decoration'
        );
        //Change this 
        $this->template->view('landingpage/VLandingPage', $data);
    }
}
