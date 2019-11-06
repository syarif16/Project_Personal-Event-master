<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_M extends CI_Model {

	/**
	 *
	 * Event Model
	 *
	 */
	

	public function Create($data, $kategori_event)
	{
		$this->db->insert('event', $data);
		$event_id = $this->db->insert_id();
		// SET MULTIPLE KATEGORI EVENT 
		$data1 = array();
		foreach($kategori_event AS $value){
			$data1[] = array(
				'kategori_event_id' => $data['kategori_event'],
				'katagori_event'  	 => $value
			);
		} 
		$this->db->insert_batch('kategori_event', $data1);   
		return $event_id;
	}

	public function Read()
	{
		# code...
		$this->db->select('*');
		$this->db->from('event');
		// $this->db->where('id', $id);
		$query = $this->db->get();
        return $query->result_array();
	}

	public function Read_Single($id)
	{
		# code...
		$this->db->select('*');
		$this->db->from('event');
		$this->db->where('id', $id);
		$query = $this->db->get();
        return $query->first_row();
	}

	public function Read_Kategori_Event()
	{
		# code...
		$this->db->select('*');
		$this->db->from('kategori_event');
		// $this->db->where('kategori_event_id', $id);
		$query = $this->db->get();
        return $query->result_array();
	}

	public function Read_Kategori_Event_Single($id)
	{
		# code...
		$this->db->select('katagori_event');
		$this->db->from('kategori_event');
		$this->db->where('kategori_event_id', $id);
		$query = $this->db->get();
        return $query->result_array();
	}

	public function imageUpload($imgName) {
        $this->db->insert('image_path', array('ImgName' => $imgName));
    }

    public function getImage() {
        return $this->db->get('image_path')->result_array();
    }
}
