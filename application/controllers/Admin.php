<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_member');
		$this->load->model('m_voucher');
		$this->load->model('m_pc');
		$this->load->model('m_login');
	}

	public function index()
	{
		$data['member'] = $this->m_member->getAll();
		$data2['voucher'] = $this->m_voucher->getAll();
		$data3['pc'] = $this->m_pc->getAll();

		$data['jumlah'] = $this->m_member->count();
		$data['jual'] = $this->m_voucher->count();
		$data['komputer'] = $this->m_pc->count();

		$this->load->view('header');
		$this->load->view('admin/v_admin', $data, $data2, $data3);
		$this->load->view('footer');

	}
}
