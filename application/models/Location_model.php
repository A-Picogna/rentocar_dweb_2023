<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location_model extends CI_Model {

    function __construct(){
        $this->load->database();
    }

    public function get_location()	{

	}

	public function delete_location()	{
        $this->db->query('DELETE FROM location WHERE id = $id_loc');

	}

	public function add_location()	{

	}

}
