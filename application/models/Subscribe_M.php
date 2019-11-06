<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe_M extends CI_Model {

	/**
	 *
	 * Subscribe Model
	 *
	 */
	//Untuk mengecek apakah ada duplikat atau tidak
	public function Check_Duplicate_Email($email)
	{
		// mengecek apakah email udah terdaftar atau belum
        $this->db->select('email');
        $this->db->from('subscribe');
        $this->db->where('email',$email);
        $query = $this->db->get();
        return $query->first_row();
	}

	public function Create($data)
	{
		//insert data email to table db subscribe
		$this->db->insert('subscribe', $data);
		return $this->db->insert_id();	
	}
}
