<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function get_location($id)	{
		$locations = $this->db->query("SELECT * FROM location");

    	foreach($locations as $location){ 
        ?>
            <h4> <?= $location['date_debut'] ?> </h4>
            <h4> <?= $location['date_fin'] ?> </h4>
            <h4> <?= $location['nb_km'] ?> </h4>
            <h4> <?= $location['prix'] ?> </h4>
            <h4> <?= $location['utilisateur_id'] ?> </h4>
            <h4> <?= $location['vehicule_id'] ?> </h4>
    <?php } 
	}

	public function delete_location()	{
        $id_loc = $this->input->post('id');
        $this->db->query('DELETE FROM location WHERE id = $id_loc');

	}

	public function add_location()	{

	}

}
