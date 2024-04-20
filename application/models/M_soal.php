<?php if (!defined('BASEPATH')) exit('No direct script acceess allowed');

class M_soal extends CI_Model
{

	private $table = "soal";
	private $private = "idsoal";


	function lihatsoal()
	{
		$query = $this->db->query("select * from soal");
		return $query->result_array();
	}

	function count_soal(){
		$query = $this->db->query("SELECT idsoal FROM soal");
		return $query->num_rows();
	}

	function tambah_soal($data)
	{
		$this->db->insert($this->table, $data);
	}

	function hapus_soal($x)
	{
		$this->db->where($this->private, $x);
		return $this->db->delete($this->table);
	}

	function update_soal($id, $data)
	{
		$this->db->where($this->private, $id);
		return $this->db->update($this->table, $data);
	}
}
