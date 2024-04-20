<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
		$password = $this->session->userdata('pass');
		if($this->session->userdata('status') != "logged"){
			redirect('Login');
		}

		$this->load->model('M_siswa');
		$this->load->model('M_soal');
		$this->load->model('M_user');
		$this->load->model('M_minat_bakat');
	}

	public function index(){
		$user_data = $this->session->userdata();
		$role = $user_data['role'];
		$kelas = $user_data['kelas'];
		
		$siswa= $this->M_siswa->count_siswa();
		$soal= $this->M_soal->count_soal();
		$user= $this->M_user->count_user();
		$minat_bakat= $this->M_minat_bakat->count_minat_bakat();
		$laporan= $this->M_minat_bakat->viewData_laporan($kelas);

		$data=array(
            'mainheader'    => 'template/mainheader',
			'mainpage'      => 'admin/template/mainpage',
			'navbar'		=> 'admin/template/navbar',
			'role' 			=> $role,
			'kelas' 		=> $kelas,
			'siswa' 		=> $siswa,
			'soal' 			=> $soal,
			'user' 			=> $user,
			'minat_bakat' 	=> $minat_bakat,
			'laporan'		=> $laporan
		);
		$this->load->view('index-dashboard',$data);
	}

	public function export(){
		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=Laporan.xls");

		$user_data = $this->session->userdata();
		$kelas = $user_data['kelas'];
		
		$data['laporan'] = $this->M_minat_bakat->viewData_laporan($kelas);

		$this->load->view('export', $data);
	  }
}
?>