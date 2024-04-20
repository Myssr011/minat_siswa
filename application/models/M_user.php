<?php if(!defined('BASEPATH')) exit('No direct script acceess allowed');

class M_user extends CI_Model{

	private $table="user";
	private $primary="idadmin";

	function viewData(){
		$query = $this->db->query("select * from user left join kelas on kelas.idkelas = user.idkelas");
		return $query->result_array();
	}

	function count_user(){
		$query = $this->db->query("SELECT idadmin FROM user");
		return $query->num_rows();
	}

	function registrasi_user($data){
		$this->db->insert($this->table,$data);
	}

	function hapus($x){
		$this->db->where($this->primary,$x);
		return $this->db->delete($this->table);
	}

	function update($id,$data){
		$this->db->where($this->primary, $id);
		return $this->db->update($this->table,$data);
	}
}