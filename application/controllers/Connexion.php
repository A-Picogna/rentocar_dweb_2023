<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Connexion extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function form_co()
    {        
		$this->form_validation->set_rules('login', 'Login', 'required');
		$this->form_validation->set_rules('password', 'MDP', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view("header");
			$this->load->view("form_connexion");
			$this->load->view("footer");
		} else {
			$login = $this->input->post('login');
			$password = $this->input->post('password');

			//$this->Client_model
            
			$this->load->view("header");
			$this->load->view("form_succes");
			$this->load->view("footer");
        }
    }
}