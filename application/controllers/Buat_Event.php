<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buat_Event extends CI_Controller {
	/**
	 *
	 * Buat Event Controller
	 *
	 */
	public function index()
	{
		$data = array();
		$data['name_page'] = 'Buat_Event';
		$data['header']['page1'] = "Beranda";
		$data['header']['page2'] = "Buat Event";
		
		$this->load->view('Template/Website/Buat-Event_V',$data);
		
	}

	public function testing()
	{
		$data = array();
		$data['name_page'] = 'Buat_Event';
		$data['header']['page1'] = "Beranda";
		$data['header']['page2'] = "Buat Event";
		// $this->session->set_userdata('id_event', 'some_value');
		// echo $_SESSION['id_event']; die;
		$this->load->view('Template/Website/Check-Event_V', $data);
	}

	public function create()
	{
		$file = uniqid();
		date_default_timezone_set("Asia/Bangkok");

		$data = array();
		$data['nama_organisasi'] = $this->input->post('nama_organisasi');
		$data['logo_organisasi'] = $this->Upload_M->Upload_Logo($file);
		$data['create_date'] =  date('Y-m-d H:i:s');

		$id_organisasi = $this->Organisasi_M->Create($data);
		$this->session->set_userdata('id_organisasi', $id_organisasi);
		
		$data = array();
		$data['nama_event'] = $this->input->post('nama_event'); 
		$data['poster_event'] = $this->Upload_M->Upload_Poster($file);
		$data['kategori_event'] = $file;
		$data['jenis_event'] = $this->input->post('jenis_event');
		$data['kapasitas_event'] = $this->input->post('kapasitas_event');
		$data['tanggal_mulai_event'] = $this->input->post('tanggal_mulai_event');
		$data['jam_mulai_event'] = $this->input->post('jam_mulai_event');
		$data['tanggal_akhir_event'] = $this->input->post('tanggal_akhir_event');
		$data['jam_akhir_event'] = $this->input->post('jam_akhir_event');
		$data['nama_tempat_event'] = $this->input->post('nama_tempat_event');
		$data['alamat_event'] = $this->input->post('alamat_event');
		$data['kota_kabupaten_event'] = $this->input->post('kota_kabupaten_event');
		$data['provinsi_event'] = $this->input->post('provinsi_event');
		$data['id_organisasi'] = $id_organisasi;
		$data['deskripsi_event'] = $this->input->post('deskripsi_event');
		$data['syarat_dan_ketentuan_event'] = $this->input->post('syarat_dan_ketentuan_event');
		$data['info_dan_kontak_event'] = $this->input->post('info_dan_kontak_event');
		$data['create_date'] =  date('Y-m-d H:i:s');

		$id_event = $this->Event_M->Create($data, $this->input->post('kategori_event'));
		$this->session->set_userdata('id_event', $id_event);

		redirect(site_url('Buat_Event/Read'));

	}
	
	public function Read()
	{
		# code...
		$data = array();
		$data['name_page'] = $_SESSION['page'];
		$data['header']['page1'] = "Beranda";
		$data['header']['page2'] = "Buat Event";
		$data['event'] = $this->Event_M->Read_Single($_SESSION['id_event']);
		$data['organisasi'] = $this->Organisasi_M->Read_Single($_SESSION['id_organisasi']);
		$data['kategori_event'] = $this->Event_M->Read_Kategori_Event_Single($data['event']->kategori_event);
		
		$this->load->view('Template/Website/Check-Event_V', $data);
	}



	function upload_image(){
		if(isset($_FILES["image"]["name"])){
			// $this->load->library('upload');
			$config = array();
			$config['upload_path'] = './uploads/deskripsi_image/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('image')){
				echo $this->upload->display_errors();
				return FALSE;
			}else{
				$data = $this->upload->data();
		        //Compress Image
		        $config['image_library']='gd2';
		        $config['source_image']='./uploads/deskripsi_image/'.$data['file_name'];
		        $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= TRUE;
	            $config['quality']= '60%';
	            $config['width']= 800;
	            $config['height']= 800;
	            $config['new_image']= './uploads/deskripsi_image/'.$data['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();
				echo base_url().'uploads/deskripsi_image/'.$data['file_name'];
			}
		}
	}

	public function delete_image(){
		$src = $this->input->post('src');
		$file_name = str_replace(base_url(), '', $src);
		if(unlink($file_name)){
	        echo 'File Delete Successfully';
	    }
	}
	

	


	
}
