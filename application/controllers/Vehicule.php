<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicule extends CI_Controller {

	public function index()	{
		$data["maVariable1"] = "BONJOUR";
		$this->load->vars($data);
		$this->load->view('vehicule_view');
	}

}
