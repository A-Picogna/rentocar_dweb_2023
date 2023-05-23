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

  public function update_client($id) {
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

    $this->db->where('id', $id);

    return $this->db->update('utilisateur', $data);
  }

  public function update_type_client($id, $type) {
    $this->db->where('id', $id);
    return $this->db->update('utilisateur', array('type_utilisateur' => $type));
  }

  public function delete_client($id) {
    $this->load->model('Location_model');
    $userLoc = $this->Location_model->get_user_location($id);
    if (count($userLoc) == 0) {
      $this->db->where('id', $id);
      return $this->db->delete('utilisateur');
      return true;
    }
    return false;
  }

  public function get_all_users() {
    $query = $this->db->get('utilisateur');
    return $query->result_array();
  }
}