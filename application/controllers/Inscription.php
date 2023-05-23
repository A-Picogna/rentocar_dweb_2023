<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inscription extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function form_ins()
    {
        $this->load->view('form_inscription');
    }

    public function verif_champ()
    {
        $rules = array(
            array(
                'field' => 'ins_pseudo',
                'rules' => 'required|trim'
            ),
            array(
                'field' => 'ins_nom',
                'rules' => 'required|trim'
            ),
            array(
                'field' => 'ins_prenom',
                'rules' => 'required|trim'
            ),
            array(
                'field' => 'ins_ddn',
                'rules' => 'required|trim'
            ),
            array(
                'field' => 'ins_email',
                'rules' => 'required|trim'
            ),
            array(
                'field' => 'ins_psw',
                'rules' => 'required|trim'
            ),
            array(
                'field' => 'password_retype',
                'rules' => 'required|trim'
            )
        );

        $this->form_validation->set_rules($rules);
    }
}
