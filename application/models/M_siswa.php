<?php if(!defined('BASEPATH')) exit('No direct script acceess allowed');

class M_siswa extends CI_Model{

	private $table="siswa";
	private $primary="nis";

	function viewData_siswa(){
		$query = $this->db->query("select * from siswa inner join kelas on kelas.idkelas = siswa.idkelas order by nis ASC");
		return $query->result_array();
	}

	function count_siswa(){
		$query = $this->db->query("SELECT nis FROM siswa");
		return $query->num_rows();
	}

	function edit_siswa($id){
		$query = $this->db->query("select * from siswa where nis='$id'");
    	return $query->result_array();
	}

	function tambah_siswa($data){
		$this->db->insert($this->table,$data);
	}

	function update_siswa($id,$data){
		$this->db->where($this->primary, $id);
		return $this->db->update($this->table,$data);
	}

	function hapus_siswa($id){
		$this->db->where($this->primary,$id);
		return $this->db->delete($this->table);
	}

	function aksi_login($user,$pass){
		$query = $this->db->query("select * from siswa where username='$user' and password='$pass'");
		return $query->result_array();
	}

}