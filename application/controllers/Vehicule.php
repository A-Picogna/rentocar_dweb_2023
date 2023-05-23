<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vehicule extends CI_Controller
{

	public function __construct() {

		
		parent::__construct();
		$this->load->helper('form','url');
		$this->load->library('form_validation');
		$this->load->model('Vehicule_model');
	}

	public function index($message = null)	{
		$data["vehicules"] = $this->Vehicule_model->get_all_vehicule();


		$this->load->vars($data);
		$this->load->view("liste_vehicules");
	}

	public function ajouter()
	{
		$this->form_validation->set_rules('type_vehicule', 'Type de véhicule', 'required');
		$this->form_validation->set_rules('kilometrage', 'Kilométrage', 'required|numeric');
		$this->form_validation->set_rules('nb_places', 'Nombre de places', 'required|numeric');
		$this->form_validation->set_rules('marque', 'Marque', 'required');
		$this->form_validation->set_rules('modele', 'Modèle', 'required');
		$this->form_validation->set_rules('puissance', 'Puissance', 'required');
		$this->form_validation->set_rules('prix_location', 'Prix de location', 'required');
		$this->form_validation->set_rules('etat', 'Etat', 'required');
		$this->form_validation->set_rules('vitesse_max', 'Vitesse max', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view("ajout_vehicule");
		} else {
			$type_vehicule = $this->input->post('type_vehicule');
			$kilometrage = $this->input->post('kilometrage');
			$nb_places = $this->input->post('nb_places');
			$marque = $this->input->post('marque');
			$modele = $this->input->post('modele');
			$puissance = $this->input->post('puissance');
			$prix_location = $this->input->post('prix_location');
			$etat = $this->input->post('etat');
			$vitesse_max = $this->input->post('vitesse_max');

			$this->Vehicule_model->add_vehicule($type_vehicule, $kilometrage, $nb_places, $marque, $modele, $puissance, $prix_location, $etat, $vitesse_max);
			$this->index("Véhicule ajouté avec succès");
		}
	}

	public function supprimer($id)
	{
		$this->Vehicule_model->delete_vehicule($id);
	}
	
	public function modifier()	{
		// $this->load->helper('form');
		// $this->Vehicule_model->edit_vehicule($id, $form);
		$this->load->view('modifier_vehicule');
	}

}
