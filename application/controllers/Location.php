<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_Controller {

	public function index()	{
		$this->load->view('location_view');
	}
	public function location_preview($id){
		$this->load->view('location_view');
	}

}
