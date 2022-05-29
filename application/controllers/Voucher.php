<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voucher extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_voucher');
	}

	public function index()
	{
		$data['voucher'] = $this->m_voucher->getAll();
		$data['jual'] = $this->m_voucher->count();

		$this->load->view('header');
		$this->load->view('voucher/v_voucher', $data);
		$this->load->view('footer');
	}

	public function beli()
	{
		$this->load->view('voucher/v_beli');
		// $this->load->view('footer');
	}

	public function proses()
	{
		$user = $this->input->post('tuser');
		$kode = $this->input->post('tkode');
		$jenis = $this->input->post('tjenis');
		$harga = $this->input->post('tharga');

		$data_voucher = ['user' => $user,'kode' => $kode,'jenis' => $jenis,'harga' => $harga];

		$simpan = $this->m_voucher->add($data_voucher);
		$this->session->set_flashdata('flash', 'Ditambahkan');
		redirect('Home/index');
	}

	public function tambah()
	{
		$user = $this->input->post('tuser');
		$kode = $this->input->post('tkode');
		$jenis = $this->input->post('tjenis');
		$harga = $this->input->post('tharga');

		$data_voucher = ['user' => $user,'kode' => $kode,'jenis' => $jenis,'harga' => $harga];

		$simpan = $this->m_voucher->add($data_voucher);
		$this->session->set_flashdata('flash', 'Ditambahkan');
		redirect('Voucher/index');
	}

	public function delete($id)
	{
		$this->m_voucher->del($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Voucher/index');
	}
}
