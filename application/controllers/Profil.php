<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Client_model');
  }

  public function index() {
    $data['client'] = $this->Client_model->get_client(4);
    $this->load->view('profil', $data);
  }

  public function edit() {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('nom', 'Nom', 'required|alpha', array('alpha' => 'Le champ %s ne doit contenir que des lettres.'));
    $this->form_validation->set_rules('prenom', 'Prenom', 'required|alpha', array('alpha' => 'Le champ %s ne doit contenir que des lettres.'));
    $this->form_validation->set_rules('ddn', 'Date de naissance', 'required|date', array('date' => 'Le champ %s doit être une date valide.'));
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email', array('valid_email' => 'Le champ %s doit être une adresse email valide.'));

    if ($this->form_validation->run() === FALSE) {
      $data['client'] = $this->Client_model->get_client(4);
      $this->load->view('edit_profil', $data);
    } else {
      $this->Client_model->update_client();
      redirect('profil');
    }
  }
}
