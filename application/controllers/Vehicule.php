<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicule extends CI_Controller {

	$this->load->model("Vehicule_model");


	public function index()	{
		$this->Vehicule_model->get_vehicule();
	}

	public function ajouter()	{
		$this->Vehicule_model->add_vehicule();
	}

}
