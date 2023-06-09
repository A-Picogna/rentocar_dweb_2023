<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vehicule_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_all_vehicule()
    {

        $vehicules = $this->db->query("SELECT * FROM vehicule");
        $vehicules = $vehicules->result_array();
        return $vehicules;
    }

    public function delete_vehicule($id)
    {
        $res = false;

        if (!$this->db->query("SELECT id FROM vehicule WHERE id = $id")->count() == 0) {
            $res = $this->db->query("DELETE FROM vehicule WHERE id = $id");
        }

        return $res;
    }

    public function add_vehicule($type_vehicule, $kilometrage, $nb_places, $marque, $modele, $puissance, $prix_location, $etat, $vitesse_max)
    {
        $data = array(
            'type_vehicule' => $type_vehicule,
            'kilometrage' => $kilometrage,
            'nb_places' => $nb_places,
            'marque' => $marque,
            'modele' => $modele,
            'puissance' => $puissance,
            'prix_location' => $prix_location,
            'etat' => $etat,
            'vitesse_max' => $vitesse_max
        );
        $this->db->insert('vehicule', $data);
    }

	public function edit_vehicule($id, $type_vehicule, $kilometrage, $nb_places, $marque, $modele, $puissance, $prix_location, $etat, $vitesse_max) {
        $this->db->query(
			"UPDATE vehicule SET type_vehicule = '$type_vehicule', kilometrage = $kilometrage, nb_places = $nb_places, marque = '$marque', modele = '$modele', puissance = $puissance, prix_location = $prix_location, etat = '$etat', vitesse_max = $vitesse_max WHERE id=$id"
		);
	}

    public function get_vehicule_by_id($id)
    {
        $query = $this->db->query("SELECT * FROM vehicule WHERE id = $id");
        return $query->result_array()[0];
    }
}
