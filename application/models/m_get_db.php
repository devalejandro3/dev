<?php
class M_Get_DB extends CI_Model{
	function getAll(){
		$query = $this->db->query("select * from user_tbl");
		return $query->result();
	}
}