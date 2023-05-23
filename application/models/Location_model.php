<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Location_model extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
  }

	public function delete_location($id)	{
        $q = $this->db->query("SELECT date_debut FROM location WHERE utilisateur_id = $id");
        $date_deb_loc = $q->row_array()['date_debut'];
        $today = date('Y-m-d'); 
        if($date_deb_loc < $today){
            return $this->db->query("DELETE FROM location WHERE id = $id");
        }
        else {
            return false;
        }
  }
  
  public function add_location()
  {
  }

  public function get_user_location($id)
  {
    $query = $this->db->query("SELECT * FROM location WHERE utilisateur_id = $id");
    return $query->result_array();
  }

  public function get_location_price(array $post_data)
  {
    $datetime1 = new DateTime($post_data['date_debut']);
    $datetime2 = new DateTime($post_data['date_fin']);
    $interval = $datetime1->diff($datetime2);
    $nb_jours = $interval->days;
    $price = 0;
  }
}
