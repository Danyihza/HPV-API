<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Auth extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model', 'auth');
    }


    public function register()
    {
        $uid = $this->input->get('user_id');
        $fname = $this->input->get('fname');
        $email = $this->input->get('email');
        $data = [
            'user_id' => $uid,
            'fullname' => $fname,
            'email_user' => $email
        ];
        $this->auth->registerUser($data);
        $output = [
            'status' => 'success',
            'message' => 'Berhasil Terdaftar',
            'data' => $data
        ];
        echo json_encode($output);
    }

    public function getUser()
    {
        $uid = $this->input->get('uid');
        $user = $this->auth->getUser($uid);
        $output = [
            'status' => 'success',
            'message' => 'User Terdaftar',
            'data' => $user
        ];

        echo json_encode($output);
    }
}

/* End of file Register.php */
