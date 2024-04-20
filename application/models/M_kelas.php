<?php if(!defined('BASEPATH')) exit('No direct script acceess allowed');

class M_kelas extends CI_Model{

	function viewData_kelas(){
		$query = $this->db->query("select * from kelas order by kelas ASC");
		return $query->result_array();
	}

}