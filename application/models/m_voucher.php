<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_voucher extends CI_Model {

	private $table = 'voucher';

	public function getAll()
	{
		return $this->db->get($this->table)
					->result();
	}

	public function add($voucher)
	{
		$this->db->insert($this->table, $voucher);
	}

	public function count()
	{
		return $this->db->get('voucher')->num_rows();
	}

	public function del($id)
	{
		$this->db->where('kode' ,$id);
		$this->db->delete('voucher');
	}

	public function getid($id)
	{
		return $this->db->get_where('voucher', ['kode' => $id])->row_array();
	}

}