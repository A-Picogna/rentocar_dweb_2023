<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Location_model extends CI_Model {

    public function __construct(){
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

	public function add_location($data)	{
    $sql = "INSERT INTO LOCATION (date_debut, date_fin, nb_km, prix, utilisateur_id, vehicule_id) VALUES (STR_TO_DATE('".$data["deb"]."', '%Y-%m-%d'), STR_TO_DATE('".$data["fin"]."', '%Y-%m-%d'), ".$data["km"].", prix, ".$data["userid"].", ".$data["vehid"].")" ;
    $this->db->query($sql);
    header('Location:');
	}

  public function get_user_location($id) {
    $query = $this->db->query("SELECT * FROM location WHERE utilisateur_id = $id");
    return $query->result_array();
  }
}
