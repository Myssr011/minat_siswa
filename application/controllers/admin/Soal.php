<?php if (!defined('BASEPATH')) exit('No direct script acces allowed');

class Soal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $password = $this->session->userdata('pass');
        $level = $this->session->userdata('level');
        if ($this->session->userdata('status') != "logged") {
            redirect('Login');
        }

        $this->load->model('M_soal');
    }

    function index()
    {
        $soal = $this->M_soal->lihatsoal();

        $data = array(
            'mainheader'    => 'template/mainheader',
            'mainpage'        => 'admin/menejemen_soal',
            'navbar'        => 'admin/template/navbar',
            'soal'            => $soal
        );

        $this->load->view('index-dashboard', $data);
    }

    function tambah_soal()
    {
        $data = array(
            'nomor' => $this->input->post('nomor'),
            'soal' => $this->input->post('soal'),
        );

        $this->M_soal->tambah_soal($data);
        redirect('admin/soal/');
    }

    function hapus($id)
    {
        $this->M_soal->hapus_soal($id);
        redirect('admin/soal/');
    }

    function update($id)
    {
        $data = array(
            'nomor' => $this->input->post('nomor'),
            'soal' => $this->input->post('soal'),
        );

        $this->M_soal->update_soal($id, $data);
        redirect('admin/soal/');
    }
}
