<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('home');
	// }

	public function index()
	{
		$this->load->model('m_member');
		$this->load->model('m_voucher');
		$this->load->model('m_pc');
		$data['member'] = $this->m_member->getAll();
		$data['voucher'] = $this->m_voucher->getAll();
		$data['pc'] = $this->m_pc->getAll();
		$data['jumlah'] = $this->m_member->count();
		$data['jual'] = $this->m_voucher->count();
		$data['komputer'] = $this->m_pc->count();

		$this->load->view('front/v_front', $data, $data['jumlah'], $data['jual'], $data['komputer']);
	}
}
