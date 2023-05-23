<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inscription extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function form_ins()
    {
        $this->load->view('form_inscription');
    }

    public function verif_champ()
    {
        if (!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_retype'])) {
            ...
    }
}