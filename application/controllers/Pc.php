<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pc extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pc');
	}

	public function index()
	{
		$data['pc'] = $this->m_pc->getAll();
		$data['komputer'] = $this->m_pc->count();

		$this->load->view('header');
		$this->load->view('PC/v_pc', $data);
		$this->load->view('footer');

	}

	public function add()
	{
		$pc = $this->input->post('tpc');
		$jenis = $this->input->post('tjenis');
		$ruang = $this->input->post('truang');
		$status = $this->input->post('tstatus');

		$data_pc = ['pc' => $pc,'jenis' => $jenis,'ruang' => $ruang,'status' => $status];

		$simpan = $this->m_pc->add($data_pc);
		$this->session->set_flashdata('flash', 'Ditambahkan');
		redirect('Pc/index');
	}

	public function delete($id_del)
	{
		$this->m_pc->del($id_del);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Pc/index');
	}

	public function edit($id_del)
	{
		// ambil data dari nim input
		$data_pc['id'] = $this->m_pc->getWhere($id_del);

		$this->load->view('header');
		$this->load->view('PC/v_edit', $data_pc);
		$this->load->view('footer');
	}

	public function simpan_edit($id_update)
	{
		$pc = $this->input->post('tpc');
		$jenis = $this->input->post('tjenis');
		$ruang = $this->input->post('truang');
		$status = $this->input->post('tstatus');
		$id = $id_update;


		$data_pc = ['id' => $id,'pc' => $pc,'jenis' => $jenis,'ruang' => $ruang,'status' => $status];


		$this->m_pc->update($id, $data_pc);
		$this->session->set_flashdata('flash', 'Diubah');

		redirect('Pc/index');
	}
}
