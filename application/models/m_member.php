<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_member extends CI_Model {

	private $table = 'member';

	public function getAll()
	{
		return $this->db->get($this->table)
					->result();
	}

	public function getlogin($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get($this->table);
	}

	public function add($member)
	{
		$this->db->insert($this->table, $member);
	}

	public function count()
	{
		return $this->db->get('member')->num_rows();
	}

	public function del($id)
	{
		$this->db->where('id' ,$id);
		$this->db->delete('member');
	}

	public function getid($id)
	{
		return $this->db->get_where('member', ['id' => $id])->row_array();
	}

	public function edit($data_pc)
	{
		$id = $data_pc['id'];

		$this->db->where('id' ,$id);
		$this->db->update($this->table, $data_pc);
	}

}