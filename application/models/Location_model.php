<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Location_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

	public function delete_location()	{
        $id_loc = $this->input->post('id');
        $this->db->query('DELETE FROM location WHERE id = $id_loc');

	}

	public function add_location()	{

	}

  public function get_user_location($id) {
    $query = $this->db->query("SELECT * FROM location WHERE utilisateur_id = $id");
    return $query->result_array();
  }
}
