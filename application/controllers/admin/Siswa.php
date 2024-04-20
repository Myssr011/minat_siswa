<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa extends CI_Controller {
	function __construct(){
		parent::__construct();
		$password = $this->session->userdata('pass');
		$level = $this->session->userdata('level');

		if($this->session->userdata('status') != "logged"){
			redirect('Login');
		}
		
		$this->load->model('M_siswa');
		$this->load->model('M_minat_bakat');
		$this->load->model('M_kelas');
	}

	public function index(){
		$siswa= $this->M_siswa->viewData_siswa();

		$data=array(
			'mainheader'	=> 'template/mainheader',
			'mainpage'		=> 'admin/menejemen_siswa',
			'navbar'		=> 'admin/template/navbar',
			'siswa'			=> $siswa,
		);

		$this->load->view('index-dashboard',$data);
	}

	function tambah(){
		$kelas= $this->M_kelas->viewData_kelas();

		$data=array('mainheader'		=> 'template/mainheader',
					'mainpage'			=> 'admin/tambah_siswa',
					'navbar'			=> 'admin/template/navbar',
					'kelas'				=> $kelas,
		);

		$this->load->view('index-dashboard',$data);	
	}

	function tambah_siswa(){
		$data=array
		(	
			'nis' => $this->input->post('nisn'),
			'nama_lengkap' => $this->input->post('nama'),
			'idkelas' => $this->input->post('kelas'),
			'jenis_kelamin' => $this->input->post('jk'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
		);
		$result = $this->M_siswa->tambah_siswa($data);

		if($result){
			redirect('admin/Siswa');
		} else {
			redirect('admin/Siswa');
		}
	}

	function edit_siswa($id){
		$siswa= $this->M_siswa->edit_siswa($id);
		$kelas= $this->M_kelas->viewData_kelas();

		$data=array(
			'mainheader'		=> 'template/mainheader',
			'mainpage'			=> 'admin/edit_siswa',
			'navbar'			=> 'admin/template/navbar',
			'siswa'				=> $siswa,
			'kelas'				=> $kelas
		);

		$this->load->view('index-dashboard',$data);
	}

	function detail_siswa($id){
		$siswa= $this->M_siswa->edit_siswa($id);

		$data=array('mainheader'		=> 'template/mainheader',
					'mainpage'			=> 'admin/detail_siswa',
					'navbar'			=> 'admin/template/navbar',
					'siswa'				=> $siswa,
		);

		$this->load->view('index-dashboard',$data);
	}

	function detail_siswa_tmp($id){
		$siswa= $this->M_siswa->reg_siswa($id);

		$data=array('mainheader'		=> 'template/mainheader',
					'mainpage'			=> 'admin/registrasi_siswa',
					'navbar'			=> 'admin/template/navbar',
					'siswa'				=> $siswa,
		);

		$this->load->view('index-dashboard',$data);
	}

	function update_siswa($id){

		$data=array
		(	
			'nis' => $this->input->post('nisn'),
			'nama_lengkap' => $this->input->post('nama'),
			'idkelas' => $this->input->post('kelas'),
			'jenis_kelamin' => $this->input->post('jk'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
		);
		
		$result = $this->M_siswa->update_siswa($id,$data);

		if($result){
			redirect('admin/Siswa');
		} else {
			redirect('admin/Siswa');
		}
	}

	function hapus_siswa($id){
		$this->M_minat_bakat->hapus_nis($id);
		$this->M_siswa->hapus_siswa($id);
		redirect('admin/Siswa');
	}
	
}