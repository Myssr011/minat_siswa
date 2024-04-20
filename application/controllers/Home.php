<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('M_soal');
		$this->load->model('M_siswa');
		$this->load->model('M_kelas');
		$this->load->model('M_minat_bakat');

		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$soal = $this->M_soal->lihatsoal();
		$kelas= $this->M_kelas->viewData_kelas();

		$data['title'] = 'Test Multiple Intelligence';
		$data['soal'] = $soal;
		$data['kelas'] = $kelas;

		$this->load->view('index', $data);
	}

	public function hasil()
	{
		$user_data = $this->session->userdata();
  		$nis = $user_data['nis'];

		$hasil = $this->M_minat_bakat->viewDatabyNIS($nis);	

		$resultHasil = array(
			'hasil' => $hasil,
		);
		
		$this->load->view('hasilMinatBakat', $resultHasil);
	}

	public function minat_bakat()
	{

		$count = sizeof($this->input->post('pilih'));

		for ($i = 1; $i <= $count; $i++) {
			$data_minat_bakat[] = array(
				'nomor' => $i,
				'pilih' => $this->input->post('pilih')[$i],
			);
		}

		$tot_ling = 0;
		$tot_log = 0;
		$tot_vis = 0;
		$tot_mus = 0;
		$tot_inter = 0;
		$tot_intra = 0;
		$tot_kin = 0;
		$tot_nat = 0;

		foreach ($data_minat_bakat as $dt) {
			if (
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 5 || 
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 9 || 
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 21 || 
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 22) {
				$tot_ling = $tot_ling + 1;
				$jumlah_data[] = array(
					'total' => $tot_ling,
					'keterangan' => "Kecerdasan Linguistik",
				);
			} else if (
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 6 || 
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 11 || 
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 24 || 
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 31) {
				$tot_log = $tot_log + 1;
				$jumlah_data[] = array(
					'total' => $tot_log,
					'keterangan' => "Kecerdasan Logika - Matematika",
				);
			} else if (
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 2 || 
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 12 || 
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 19 || 
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 27) {
				$tot_vis = $tot_vis + 1;
				$jumlah_data[] = array(
					'total' => $tot_vis,
					'keterangan' => "Kecerdasan Visual - Spasial",
				);
			} else if (
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 4 || 
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 10 || 
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 18 || 
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 30) {
				$tot_mus = $tot_mus + 1;
				$jumlah_data[] = array(
					'total' => $tot_mus,
					'keterangan' => "Kecerdasan Musikal",
				);
			} else if (
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 3 || 
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 8 || 
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 13 || 
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 25) {
				$tot_inter = $tot_inter + 1;
				$jumlah_data[] = array(
					'total' => $tot_inter,
					'keterangan' => "Kecerdasan Interpersonal",
				);
			} else if (
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 7 || 
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 16 || 
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 17 || 
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 29) {
				$tot_intra = $tot_intra + 1;
				$jumlah_data[] = array(
					'total' => $tot_intra,
					'keterangan' => "Kecerdasan Intrapersonal",
				);
			} else if (
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 1 || 
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 14 || 
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 23 || 
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 28) {
				$tot_kin = $tot_kin + 1;
				$jumlah_data[] = array(
					'total' => $tot_kin,
					'keterangan' => "Kecerdasan Kinestetik - Jasmani",
				);
			} else if (
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 15 || 
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 20 || 
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 26 || 
				$dt['pilih'] >= 3 && $dt['pilih'] <= 5 && $dt['nomor'] == 32) {
				$tot_nat = $tot_nat + 1;
				$jumlah_data[] = array(
					'total' => $tot_nat,
					'keterangan' => "Kecerdasan Naturalis",
				);
			}
		}

		$arr_tot = [];

		foreach ($jumlah_data as $jt) {
			$arr_tot[] = $jt['total'];
		}

		$max = max($arr_tot);
		$result = array_filter($arr_tot,function($v)use($max){ return $v == $max;});

		$no = 1;
		foreach ($result as $key => $val) {	

			if($jumlah_data[$key]['keterangan'] == 'Kecerdasan Linguistik'){
				$cca = "English Club, Mandarin";
			} else if($jumlah_data[$key]['keterangan'] == 'Kecerdasan Logika - Matematika') {
				$cca = "Math Club, ICT Club, Science Club";
			} else if($jumlah_data[$key]['keterangan'] == 'Kecerdasan Visual - Spasial') {
				$cca = "Hip hop, Design graphics, ICT Club, Traditional Dance";
			} else if($jumlah_data[$key]['keterangan'] == 'Kecerdasan Musikal') {
				$cca = "Hip hop, Violin, Choir, Traditional Dance";
			} else if($jumlah_data[$key]['keterangan'] == 'Kecerdasan Interpersonal') {
				$cca = "English Club, Design graphics, ICT Club";
			} else if($jumlah_data[$key]['keterangan'] == 'Kecerdasan Intrapersonal') {
				$cca = "English Club, Design graphics, ICT Club";
			} else if($jumlah_data[$key]['keterangan'] == 'Kecerdasan Kinestetik - Jasmani') {
				$cca = "Futsal, Basket, Tennis Meja";
			} else if($jumlah_data[$key]['keterangan'] == 'Kecerdasan Naturalis') {
				$cca = "Science Club";
			}

			$result_minat_bakat[] = array(
				'persen' => $jumlah_data[$key]['total'] * 25,
				'hasil' => $jumlah_data[$key]['keterangan'],
				'waktu' => date('Y-m-d H:i:s'),
				'cca' => $cca,
				'nis' => $this->input->post('nisn'),
			);
		}

		$data_result = array(
			'result' => $result_minat_bakat
		);

		$this->load->view('hasil', $data_result);
	}

	public function saveMinatBakat()
	{
		$nis = $this->input->get('nis');
		$persen = $this->input->get('persen');
		$hasil = $this->input->get('hasil');
		$cca = $this->input->get('cca');
		$waktu = $this->input->get('waktu');
		
		$res_minat_bakat = array(
			'persen' => $persen,
			'hasil' => $hasil,
			'cca' => $cca,
			'waktu' => $waktu,
			'nis' => $nis,
		);

		$result = $this->M_minat_bakat->tambah_minat_bakat($res_minat_bakat);

		if($result){
			redirect("home/hasil");
		} else {
			redirect("home");
		}
	}
}
