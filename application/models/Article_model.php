<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends CI_Model {

    public function getAllArticle()
    {
        return $this->db->get('tb_articles')->result_array();
    }

}

/* End of file Article_model.php */
