<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Atk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('atk_model');
        $this->load->helper(array('form', 'url'));
        $this->load->database(); // Pastikan baris ini ada
    }

    public function index()
    {
        $data['atk_items'] = $this->atk_model->get_all_atk();
        $this->load->view('atk_list', $data);
    }

    public function add()
    {
        $this->load->view('atk_form');
    }

    public function save()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'quantity' => $this->input->post('quantity'),
            'price' => $this->input->post('price')
        );

        $this->atk_model->insert_atk($data);
        redirect('atk');
    }
}
