<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_M extends CI_Model {

	/**
	 *
	 * Upload Model
	 *
	 */
	public function Upload_Poster($nama_file)
	{
		$config = array();
		$config['upload_path']      = './uploads/poster/';
		$config['allowed_types']    = 'gif|jpg|png';
		$config['file_name']        = $nama_file;
		// $config['overwrite']		= true;
        $config['max_size']         = 1024; //1MB
        // $config['max_width']        = 2000;
        // $config['max_height']       = 2000;

		
		// $this->load->library('upload', $config);
		$this->upload->initialize($config);
		
        if(!$this->upload->do_upload('poster_event')) {

			$error = $this->upload->display_errors();
			if ($error == 'The file you are attempting to upload is larger than the permitted size.') {
				$this->session->set_flashdata('error', 'minimal file 1 MB');
				$upload = "error";
			} elseif ($error == 'You did not select a file to upload.') {
				$upload = "default.jpg";
			}
			return ; 
        } else {
			// echo "poster sukses";die;
			$upload = $this->upload->data('file_name');
			// echo $config['upload_path']; die;
			return $upload; 
        }
    }
    
    public function Upload_Logo($nama_file)
	{
		$config = array();
		$config['upload_path']      = './uploads/logo/';
		$config['allowed_types']    = 'gif|jpg|png';
		$config['file_name']        = $nama_file;
		// $config['overwrite']		= true;
        $config['max_size']         = 1024; //1MB
        // $config['max_width']        = 2000;
        // $config['max_height']       = 2000;

		// $this->load->library('upload', $config);
		$this->upload->initialize($config);

        if(!$this->upload->do_upload('logo_organisasi')) {
			// echo "logo gagal";die;
			$error = $this->upload->display_errors();
			if ($error == 'The file you are attempting to upload is larger than the permitted size.') {
				$this->session->set_flashdata('error', 'minimal file 1 MB');
				$upload = "error";
			} elseif ($error == 'You did not select a file to upload.') {
				$upload = "default.jpg";
			}
			return; 
        } else {
			$upload = $this->upload->data('file_name');
			return $upload; 
        }
	}

	// public function Upload_Image()
	// {
	// 	# code...
	// 	$config['upload_path'] = './uploads/deskripsi_image/';
	// 	$config['allowed_types'] = 'jpg|jpeg|png|gif';
	// 	$this->upload->initialize($config);
	// 	if(!$this->upload->do_upload('image')){
	// 		$this->upload->display_errors();
	// 		return FALSE;
	// 	}else{
	// 		$data = $this->upload->data();
	// 		//Compress Image
	// 		$config['image_library']='gd2';
	// 		$config['source_image']='./uploads/deskripsi_image/'.$data['file_name'];
	// 		$config['create_thumb']= FALSE;
	// 		$config['maintain_ratio']= TRUE;
	// 		$config['quality']= '60%';
	// 		$config['width']= 800;
	// 		$config['height']= 800;
	// 		$config['new_image']= './uploads/deskripsi_image/'.$data['file_name'];
	// 		$this->load->library('image_lib', $config);
	// 		$this->image_lib->resize();
	// 		echo base_url().'uploads/deskripsi_image/'.$data['file_name'];
	// 	}
	// }
}
