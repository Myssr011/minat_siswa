<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('M_login');
		$this->load->model('M_siswa');
		$this->load->model('M_minat_bakat');
	}

	function index()
	{
		$this->load->view('login');
	}

	function aksi_login()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$siswa = $this->input->post('siswa');

		if ($siswa == 1) {
			$cek = $this->M_siswa->aksi_login($user, $pass);
			if ($cek) {
				$data_session = array(
					'user' 		=> $user,
					'id'			=> $cek[0]['username'],
					'pass'		=> $cek[0]['password'],
					'nis'		=> $cek[0]['nis'],
					'nama'		=> $cek[0]['nama_lengkap'],
					'jenis_kelamin'	=> $cek[0]['jenis_kelamin'],
					'kelas'		=> $cek[0]['idkelas'],
					'role'		=> $cek[0]['role'],
					'status' 	=> "logged"
				);
				$this->session->set_userdata($data_session);
				$minat_bakat = $this->M_minat_bakat->viewDatabyNIS($cek[0]['nis']);

				if($minat_bakat){
					redirect("home/hasil");
				} else {
					redirect("home");
				}
			} else {
				echo "Username dan Password Salah. Silahkan coba kembali.";
			}
		} else {

			$cek = $this->M_login->aksi_login($user, $pass);

			if ($cek) {
				$data_session = array(
					'user' 		=> $user,
					'id'			=> $cek[0]['username'],
					'pass'		=> $cek[0]['password'],
					'nama'		=> $cek[0]['nama_lengkap'],
					'role'		=> $cek[0]['role'],
					'kelas'		=> $cek[0]['idkelas'],
					'status' 	=> "logged"
				);

				$this->session->set_userdata($data_session);
				redirect("admin/dashboard");
			} else {
				echo "Username dan Password Salah. Silahkan coba kembali.";
			}
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('Login');
	}
}
