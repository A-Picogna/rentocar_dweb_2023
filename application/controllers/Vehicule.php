<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vehicule extends CI_Controller {

	public function __construct() {

		
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Vehicule_model');
	}

	public function index()	{
		$data["vehicules"] = $this->Vehicule_model->get_all_vehicule();


		$this->load->vars($data);
		$this->load->view("liste_vehicules");
	}

	public function ajouter()	{
		$this->Vehicule_model->add_vehicule();
		$this->load->view("ajout_vehicule");
	}

	public function get_vehicule_by_id(){
		
	}
	public function supprimer($id)	{
		$this->Vehicule_model->delete_vehicule($id);
	}

}

?>
