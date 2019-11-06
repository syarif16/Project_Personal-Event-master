<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	/**
	 *
	 * Tentang Controller
	 *
	 */
	public function index()
	{
		$data = array ();

		$data['name_page'] = 'About';
		$data['header']['page1'] = "Beranda";
		$data['header']['page2'] = "Tentang";

		$this->session->set_userdata('page', 'About');

		$this->load->view('Template/Website/Tentang_V', $data);
	}
}
