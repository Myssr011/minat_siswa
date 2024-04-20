<?php if(!defined('BASEPATH')) exit('No direct script acceess allowed');

class M_minat_bakat extends CI_Model{

	private $table="minat_bakat";
	private $primary="idminatbakat";
	private $nis="nis";

	function viewData_minat_bakat(){
		$query = $this->db->query("select * from minat_bakat order by idminatbakat ASC");
		return $query->result_array();
	}

	function viewData_laporan($kelas){
		if($kelas != 0){
			$query = $this->db->query("select * from minat_bakat inner join siswa on siswa.nis = minat_bakat.nis inner join kelas on kelas.idkelas = siswa.idkelas where siswa.idkelas = $kelas order by minat_bakat.idminatbakat DESC");
		} else {
			$query = $this->db->query("select * from minat_bakat inner join siswa on siswa.nis = minat_bakat.nis inner join kelas on kelas.idkelas = siswa.idkelas order by minat_bakat.idminatbakat DESC");
		}
		return $query->result_array();
	}

	function viewDatabyNIS($nis){
		$query = $this->db->query("SELECT * FROM minat_bakat WHERE nis='$nis'");
		return $query->row();
	}

	function count_minat_bakat(){
		$query = $this->db->query("SELECT idminatbakat FROM minat_bakat GROUP BY nis");
		return $query->num_rows();
	}

	function edit_minat_bakat($id){
		$query = $this->db->query("SELECT * FROM minat_bakat WHERE idminatbakat='$id'");
    	return $query->result_array();
	}

	function tambah_minat_bakat($data){
		$this->db->insert($this->table,$data);
		return true;
	}

	function update_minat_bakat($id,$data){
		$this->db->where($this->primary, $id);
		return $this->db->update($this->table,$data);
	}

	function hapus_minat_bakat($id){
		$this->db->where($this->primary,$id);
		return $this->db->delete($this->table);
	}

	function hapus_nis($id){
		$this->db->where($this->nis,$id);
		return $this->db->delete($this->table);
	}

}