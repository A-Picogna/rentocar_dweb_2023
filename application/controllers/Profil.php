<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Client_model');
    $this->current_user = 2;
  }

  public function index()
  {
    $data['client'] = $this->Client_model->get_client($this->current_user);
    if (empty($data['client'])) {
      redirect('welcome');
    }
    $this->load->helper('form');
    if (!empty($this->input->post())) {
      $this->load->library('form_validation');

      $delete = $this->input->post('delete');

      if ($delete === "Delete") {
        $tmp = $this->Client_model->delete_client($this->current_user);
        if ($tmp) {
          redirect('welcome');
        } else {
          $data['delete_error'] = "Vous ne pouvez pas supprimer votre compte car vous avez des locations en cours.";
          $this->load->view('profil', $data);
          return;
        }
      }

      $this->form_validation->set_rules('nom', 'Nom', 'required|alpha', array('alpha' => 'Le champ %s ne doit contenir que des lettres.'));
      $this->form_validation->set_rules('prenom', 'Prenom', 'required|alpha', array('alpha' => 'Le champ %s ne doit contenir que des lettres.'));
      $this->form_validation->set_rules('ddn', 'Date de naissance', 'required|date', array('date' => 'Le champ %s doit être une date valide.'));
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email', array('valid_email' => 'Le champ %s doit être une adresse email valide.'));

      if ($this->form_validation->run() !== FALSE) {
        $this->Client_model->update_client($this->current_user);
        $data['client'] = $this->Client_model->get_client($this->current_user);
      } else {
        // reload prepopulate form with sent data
        echo ("<script>console.log('Clean data: " . json_encode($this->Client_model->get_client($this->current_user)) . "');</script>");
        $data['client'] = $this->input->post();
        echo ("<script>console.log('Sent data: " . json_encode($this->input->post()) . "');</script>");
      }
    }

    $this->load->view('profil', $data);
  }
}
