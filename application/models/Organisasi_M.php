<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organisasi_M extends CI_Model {

	/**
	 *
	 * Event Model
	 *
	 */
	public function Create($data)
	{
		$this->db->insert('organisasi', $data);
		return $this->db->insert_id();
	}

	public function Read()
	{
		# code...
		$this->db->select('*');
		$this->db->from('organisasi');
		// $this->db->where('id', $id);
		$query = $this->db->get();
        return $query->result_array();
	}

	public function Read_Single($id)
	{
		# code...
		$this->db->select('*');
		$this->db->from('organisasi');
		$this->db->where('id', $id);
		$query = $this->db->get();
        return $query->first_row();
	}
}
