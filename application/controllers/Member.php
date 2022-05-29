<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_member');
	}

	public function index()
	{
		$data['member'] = $this->m_member->getAll();
		$data['jumlah'] = $this->m_member->count();
		$this->load->view('header');
		$this->load->view('member/v_member', $data);
		$this->load->view('footer');

	}

	public function daftar()
	{
		$this->load->view('member/v_daftar');
	}

	public function proses()
	{
		$nama = $this->input->post('tnama');
		$email = $this->input->post('temail');
		$username = $this->input->post('tusername');
		$password = $this->input->post('tpassword');

		$data_member = ['nama' => $nama,'email' => $email,'username' => $username,'password' => $password];

		$simpan = $this->m_member->add($data_member);
		$this->session->set_flashdata('flash', 'Mendaftar');
		redirect('Member/daftar');
	}

	public function tambah()
	{
		$nama = $this->input->post('tnama');
		$email = $this->input->post('temail');
		$username = $this->input->post('tusername');
		$password = $this->input->post('tpassword');

		$data_member = ['nama' => $nama,'email' => $email,'username' => $username,'password' => $password];

		$simpan = $this->m_member->add($data_member);
		$this->session->set_flashdata('flash', 'Mendaftar');
		redirect('Member/index');
	}

	public function delete($id)
	{
		$this->m_member->del($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Member/index');
	}
}
