<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vehicule_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_vehicule()
    {

        $vehicules = $this->db->query("SELECT * FROM vehicule");

        foreach ($vehicules as $vehicule): ?>

			<h4> <?=$vehicule['type_vehicule']?> </h4>
			<h4> <?=$vehicule['modele']?> </h4>
			<h4> <?=$vehicule['marque']?> </h4>
			<h4> <?=$vehicule['prix_location']?> </h4>

			<button type="submit" name="submit">Voir le véhicule</button>

    <?php endforeach;

    }

    public function delete_vehicule()
    {

    }

    public function add_vehicule()
    {

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

            db_insert(
                "INSERT INTO vehicule(type_vehicule,kilometrage,nb_places,marque,modele,puissance,prix_location,etat,vitesse_max) VALUES(:type_vehicule,:kilometrage,:nb_places,:marque,:modele,:puissance,:prix_location,:etat,:vitesse_max)",
                ["type_vehicule" => $type_vehicule, "kilometrage" => $kilometrage, "nb_places" => $nb_places, "marque" => $marque, "modele" => $modele, "puissance" => $puissance, "prix_location" => $prix_location, "etat" => $etat, "vitesse_max" => $vitesse_max]
            );

        }
    }

}
