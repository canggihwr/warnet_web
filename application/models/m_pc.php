<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_pc extends CI_Model {

	private $table = 'pc';

	public function getAll()
	{
		return $this->db->get($this->table)
					->result();
	}

	public function add($pc)
	{
		$this->db->insert($this->table, $pc);
	}

	public function count()
	{
		return $this->db->get('pc')->num_rows();
	}

	public function del($id)
	{
		$this->db->where('id' ,$id);
		$this->db->delete('pc');
	}

	public function getWhere($id)
	{
		return $this->db->get_where($this->table,
			['id' => $id])->row_object();
	}

	public function update($where, $data_pc)
	{
		$id = $where;

		$this->db->where('id' ,$id);
		$this->db->update($this->table, $data_pc);
	}



}