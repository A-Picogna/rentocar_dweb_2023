<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client_model extends CI_Model {

  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function get_client($id) {
    $query = $this->db->get_where('utilisateur', array('id' => $id));
    return $query->row_array();
  }

  public function update_client() {
    $nom = $this->input->post('nom');
    $prenom = $this->input->post('prenom');
    $ddn = $this->input->post('ddn');
    $email = $this->input->post('email');

    $data = array(
      'nom' => $nom,
      'prenom' => $prenom,
      'ddn' => $ddn,
      'email' => $email
    );

    $this->db->where('id', 4);

    return $this->db->update('utilisateur', $data);
  }
}
