<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {
	/**
	 *
	 * Event Controller
	 *
	 */
	public function index()
	{

		$data = array ();
		$data['name_page'] = 'Events';
		$data['header']['page1'] = "Beranda";
		$data['header']['page2'] = "Event";
		$data['event'] = $this->Event_M->Read();
		$data['organisasi'] = $this->Organisasi_M->Read();
		$data['kategori_event'] = $this->Event_M->Read_Kategori_Event();

		$this->session->set_userdata('page', 'Events');
		
		$this->load->view('Template/Website/Event/Event_V', $data);
	}

	public function Bazaar()
	{

		$data = array ();
		$data['name_page'] = 'Beranda';
		$data['header']['page1'] = "Event";
		$data['header']['page2'] = "Bazaar";

		$this->session->set_userdata('page', 'Events');
		
		$this->load->view('Template/Website/Event/Bazaar_V', $data);
	}
    
  public function Job_Fair()
	{
		$data = array ();
		$data['name_page'] = 'Beranda';
		$data['header']['page1'] = "Event";
		$data['header']['page2'] = "Job Fair";

		$this->session->set_userdata('page', 'Events');
		
		$this->load->view('Template/Website/Event/Job-Fair_V', $data);
	}
    
	public function Lomba()
	{
		$data = array ();
		$data['name_page'] = 'Beranda';
		$data['header']['page1'] = "Event";
		$data['header']['page2'] = "Lomba";

		$this->session->set_userdata('page', 'Events');

		$this->load->view('Template/Website/Event/Lomba_V', $data);
		
	}
    
	public function Pameran()
	{
		$data = array ();
		$data['name_page'] = 'Beranda';
		$data['header']['page1'] = "Event";
		$data['header']['page2'] = "Pameran";

		$this->session->set_userdata('page', 'Events');
		
		$this->load->view('Template/Website/Event/Pameran_V', $data);

	}
    
	public function Seminar()
	{
        $data = array ();
		$data['name_page'] = 'Beranda';
		$data['header']['page1'] = "Event";
		$data['header']['page2'] = "Seminar";

		$this->session->set_userdata('page', 'Events');

		$this->load->view('Template/Website/Event/Seminar_V', $data);
		
	}
}
