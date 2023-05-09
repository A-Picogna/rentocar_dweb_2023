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

			if(!$this->db->query("SELECT id FROM vehicule WHERE id = $id")->count() == 0) {
				$res = $this->db->query("DELETE FROM vehicule WHERE id = $id");
			}

			return $res;
    }

    public function add_vehicule(){

        if (isset($_POST['submit'])) {
            $type_vehicule = $_POST['type_vehicule'];
            $kilometrage = $_POST['kilometrage'];
            $nb_places = $_POST['nb_places'];
            $marque = $_POST['marque'];
            $modele = $_POST['modele'];
            $puissance = $_POST['puissance'];
            $prix_location = $_POST['prix_location'];
            $etat = $_POST['etat'];
            $vitesse_max = $_POST['vitesse_max'];

            $this->db->query(
                "INSERT INTO vehicule(type_vehicule,kilometrage,nb_places,marque,modele,puissance,prix_location,etat,vitesse_max) VALUES(:type_vehicule,:kilometrage,:nb_places,:marque,:modele,:puissance,:prix_location,:etat,:vitesse_max)",
                ["type_vehicule" => $type_vehicule, "kilometrage" => $kilometrage, "nb_places" => $nb_places, "marque" => $marque, "modele" => $modele, "puissance" => $puissance, "prix_location" => $prix_location, "etat" => $etat, "vitesse_max" => $vitesse_max]
            );

        }
    }
	public function edit_vehicule($id, $form) {
		$type_vehicule = $form['type_vehicule'];
		$kilometrage = $form['kilometrage'];
		$nb_places = $form['nb_places'];
		$marque = $form['marque'];
		$modele = $form['modele'];
		$puissance = $form['puissance'];
		$prix_location = $form['prix_location'];
		$etat = $form['etat'];
		$vitesse_max = $form['vitesse_max'];

		$this->db->query(
			"UPDATE vehicule SET type_vehicule = $type_vehicule, kilometrage = $kilometrage, bn_places = $nb_places, marque = $marque, modele = $modele, puissance = $puissance, prix_location = $prix_location, etat = $etat, vitesse_max = $vitesse_max WHERE id=$id"
		);
	}

    public function get_vehicule_by_id($id){
        $query = $this->db->query("SELECT * FROM vehicule WHERE id = $id");
        return $query->result_array()[0];
    }
}
