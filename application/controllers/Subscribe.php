<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends CI_Controller {

	/**
	 *
	 * Subscribe Controller
	 *
	 */
	public function index($name_page)
	{
		if ($this->form_validation->run('subscribe-validation') == FALSE) 
		{
			// if form validation failed
			$this->session->set_flashdata('Modal-Alert','Failed');
			$this->session->set_flashdata('Modal-Content','Email yang anda masukkan tidak valid.');
			redirect(site_url($name_page));
		} 
		else 
		{
			// if form validation success
			// check duplicate
			// $email = $this->input->post('email');
			$duplikat = $this->Check_Duplicate_Email($this->input->post('email'));
			if($duplikat == TRUE)
			{
				//if email duplicate
				$this->session->set_flashdata('Modal-Alert','Duplicate');
				$this->session->set_flashdata('Modal-Content','Email yang anda masukkan sudah ter-Subscribe sebelumnya.');
				redirect(site_url($name_page));
			}
			else
			{
				// if save email subscribe
				// echo "false";
				$this->Create($this->input->post('email'));
				$this->session->set_flashdata('Modal-Alert','Success');
				$this->session->set_flashdata('Modal-Content','Anda berhasil Subscribe.');
				redirect(site_url($name_page));
			}
		}
	}

	public function Check_Duplicate_Email($email)
	{
		return $this->Subscribe_M->Check_Duplicate_Email($email);
	}

	public function Create($email)
	{
		date_default_timezone_set("Asia/Bangkok");

		$data = array();
		$data['email'] = $email;
		$data['create_date'] =  date('Y-m-d H:i:s');

		$this->Subscribe_M->Create($data);
	}

}
