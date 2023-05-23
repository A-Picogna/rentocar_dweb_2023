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
		$this->load->helper(array('form', 'url'));
		$data['vehicule_info'] = $this->get_vehicule_info(1);
		$data['form_open'] = form_open('Location/form_validation');
		$this->load->vars($data);
		$this->load->view('location_view');
	}

	public function form_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('deb', '', 'required');
		$this->form_validation->set_rules('fin', '', 'required');
		$this->form_validation->set_rules('km', '', 'required|numeric');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			$this->Location_model->add_location($this->input->post());
		}
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