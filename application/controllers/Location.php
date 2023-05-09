<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_Controller {

    public function __construct(){
        $this->load->model('Location_model');
    }

	public function index()	{
		$this->load->view('location_view');
	}
	public function location_preview($id){
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
}
