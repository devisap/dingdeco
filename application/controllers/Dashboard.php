<?php
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $data = array(
            'title' => 'Dashboard | SYMA Decoration'
        );
        //Change this 
        $this->template->view('admin/VDashboard', $data);
    }
}
