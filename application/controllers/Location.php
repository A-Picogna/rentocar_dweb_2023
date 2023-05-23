<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model("Vehicule_model");
        $this->load->model('Location_model');
	}

	public function index()	{
		$this->load->view('location_view');
	}

	public function location_preview(){
		$data['vehicule_info'] = $this->get_vehicule_info(1);
		$this->load->vars($data);
		$this->load->view('location_view');
	}
    
    public function delete($id){
        $del = $this->Location_model->delete_location($id);
        if($del == false){
            $this->load->view('liste_locations');
        }
        else {
            $this->load->view('liste_locations');
        }
    }

	public function get_vehicule_info ($id){
		return $this->Vehicule_model->get_vehicule_by_id($id);		
	}
}	
