<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class User extends RestController
{

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }

    public function login_post()
    {
        $param = $this->post();
        if (!empty($param['username']) && !empty($param['password'])) {
            $user = $this->db->get_where('pengguna', ['NAMA_PENGGUNA' => $param['username']])->result();
            if ($user != null) {
                $resLogin = $this->db->get_where(
                    'pengguna',
                    ['NAMA_PENGGUNA' => $param['username'], 'PASSWORD_PENGGUNA' => $param['password']]
                )->result();
                if ($resLogin != null) {
                    $this->response(['status' => true, 'message' => 'Data berhasil ditemukan' , 'data' => $resLogin[0]], 200);
                }else{
                    $this->response(['status' => false, 'message' => 'Username atau password salah' ], 404);
                }
            } else {
                $this->response(['status' => false, 'message' => 'Data tidak ditemukan'], 404);
            }
        } else {
            $this->response(['status' => false, 'message' => 'Parameter tidak cocok'], 404);
        }
    }
}
