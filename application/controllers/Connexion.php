<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Connexion extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function form_co()
    {
        $this->load->view('form_connexion');
    }
}
