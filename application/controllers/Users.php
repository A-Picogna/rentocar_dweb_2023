<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Client_model');
    }

    public function index()
    {

        if (!empty($this->input->post())) {

            foreach ($this->input->post('modified[]') as $modif) {
                $id = explode('-', $modif)[0];
                $val = explode('-', $modif)[1];

                if ($val == 'agent' || $val == 'client') {
                    $this->Client_model->update_type_client($id, $val);
                }
            }
        }
        $data['users'] = $this->Client_model->get_all_users();
        $this->load->view('users', $data);
        $this->load->view('footer');
    }
}
