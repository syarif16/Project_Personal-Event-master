<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	/**
	 *
	 * Beranda Controller
	 *
	 */
	public function index()
	{
		$data = array ();

		$data['name_page'] = 'Contact';
		$data['header']['page1'] = "Beranda";
		$data['header']['page2'] = "Kontak";

		$this->session->set_userdata('page', 'Contact');

		$this->load->view('Template/Website/Kontak_V', $data);
	}

	public function Create()
	{
		# code...
		$data = array();
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['subject'] = $this->input->post('subject');
		$data['message'] = $this->input->post('message');

		$this->Message_M->Create($data);

		// $this->session->set_userdata('id_event', $id_event);
		$this->session->set_flashdata('Modal-Alert','Success');
		$this->session->set_flashdata('Modal-Content','Anda berhasil mengirim message.');

		redirect(site_url('Contact'));
	}
}
