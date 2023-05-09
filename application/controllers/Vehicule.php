<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vehicule extends CI_Controller {

	public function __construct() {
		$this->load->model("Vehicule_model");
	}

	public function index()	{
		$this->Vehicule_model->get_vehicule();
		$this->load->view("ajout_vehicule");
	}

	public function ajouter()	{
		$this->Vehicule_model->add_vehicule();
	}

	public function get_vehicule_by_id(){
		
	}
	public function supprimer($id)	{
		$this->Vehicule_model->delete_vehicule($id);
	}

}

?>
