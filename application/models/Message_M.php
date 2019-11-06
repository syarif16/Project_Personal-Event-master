<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_M extends CI_Model {

	/**
	 *
	 * Message Model
	 *
	 */
	public function Create($data)
	{
		$this->db->insert('message', $data);
		return $this->db->insert_id();
	}
}
