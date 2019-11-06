<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	/**
	 *
	 * Beranda Controller
	 *
	 */
	public function index()
	{
		$data = array();
		$data['name_page'] = 'Beranda';
		
		$this->session->set_userdata('page', 'Beranda');
	
		$this->load->view('Template/Website/Beranda_V', $data);
	}
	
}
