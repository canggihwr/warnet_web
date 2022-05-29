<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		$this->load->model('m_member');
	}

	public function index()
	{
		$this->load->view('login/v_login');
	}

	public function admin()
	{
		$this->load->view('login/v_login_admin');
	}

	public function auth()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$auth = $this->m_member->getlogin($username, $password);

		if ($auth->num_rows() > 0) {
			$session = $auth->row_object();
			$data_session = [
				'nama_pengguna' => $session->nama_lengkap,
				'hak_pengguna' => $session->hak_akses
			];

			$this->session->set_userdata($data_session);
			redirect('home');
		} else {
			$this->session->set_flashdata('pesan', 'MAAF Username atau Password anda salah!');
			redirect('login/index');
		}
	}

	public function auth_admin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$auth = $this->m_login->getlogin($username, $password);

		if ($auth->num_rows() > 0) {
			$session = $auth->row_object();
			$data_session = [
				'nama_pengguna' => $session->nama_lengkap,
				'hak_pengguna' => $session->hak_akses
			];

			$this->session->set_userdata($data_session);
			redirect('admin/index');
		} else {
			$this->session->set_flashdata('pesan', 'Username atau Password salah!');
			redirect('login/admin');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('');
	}
}
