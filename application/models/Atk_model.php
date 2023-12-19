<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Atk_model extends CI_Model
{

    public function get_all_atk()
    {
        return $this->db->get('atk')->result_array();
    }

    public function insert_atk($data)
    {
        $this->db->insert('atk', $data);
    }
}
