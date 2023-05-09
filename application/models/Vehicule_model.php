<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicule_model extends CI_Model {

	public function get_vehicule()	{

		$this->load->database();


		
		$vehicules = $this->db->query("SELECT * FROM vehicule");

    	foreach($vehicules as $vehicule): ?>

			<h4> <?= $vehicule['type_vehicule'] ?> </h4>
			<h4> <?= $vehicule['modele'] ?> </h4>
			<h4> <?= $vehicule['marque'] ?> </h4>
			<h4> <?= $vehicule['prix_location'] ?> </h4>

			<h4 type="submit" name="submit">Voir le véhicule</h4>
        
    <?php endforeach;  

	}

	public function delete_vehicule()	{

	}

	public function add_vehicule()	{

	}

}
