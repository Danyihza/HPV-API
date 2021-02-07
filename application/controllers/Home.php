<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id_admin')) {
            redirect('Auth');
        }
    }

    public function index()
    {
        $this->load->view('home');
    }

    public function uploads()
    {
        $uploadgambar = $_FILES['upload']['name'];

        if ($uploadgambar) {
            # code...
            $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif';
            $config['max_size'] = '5000';
            $config['upload_path'] = './assets/uploads/';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar_produk')) {
                # code...
                $img = $this->upload->data('file_name');
            } else {
                echo $this->upload->displays_errors();
            }
        }
    }

}

/* End of file Home.php */
 ?>