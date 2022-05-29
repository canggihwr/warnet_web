<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_login extends CI_Model {

	private $table = 'login';

	public function getlogin($username, $password)
	{
		$this->db->where('admin', $username);
		$this->db->where('pass', $password);
		return $this->db->get($this->table);
	}
}