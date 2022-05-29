<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('home');
		$this->load->model('m_member');
		$this->load->model('m_voucher');
		$this->load->model('m_pc');
	}

	public function index()
	{
		$data['member'] = $this->m_member->getAll();
		$data['voucher'] = $this->m_voucher->getAll();
		$data['pc'] = $this->m_pc->getAll();

		$data['jumlah'] = $this->m_member->count();
		$data['jual'] = $this->m_voucher->count();
		$data['komputer'] = $this->m_pc->count();

		// $this->load->view('header');
		$this->load->view('home/v_home', $data);
		$this->load->view('footer');
	}
}
