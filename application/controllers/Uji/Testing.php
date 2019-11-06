<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller {
	/**
	 *
	 * Tentang Controller
	 *
	 */
	public function index()
	{
		$id = 23;

		$data = array ();
		$data['name_page'] = 'Events';
		$data['header']['page1'] = "Beranda";
		$data['header']['page2'] = "Event";
		$data['event'] = $this->Event_M->Read($id);
		$data['organisasi'] = $this->Organisasi_M->Read($data['event']->id_organisasi);
		$data['kategori_event'] = $this->Event_M->Read_Kategori_Event($data['event']->kategori_event);

		$this->load->view('Template/Website/Event/Single-Page/Single_Event_V', $data);
	}
}
