<?php
class M_Petugas extends CI_Model{
	function data_petugas(){
		$query = $this->db->query("select * from petugas");
		return $query;
	
	}
	function simpan(){
	$data = array('username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'nama_lengkap' => $this->input->post('namalengkap'));
	$insert = $this->db->insert('petugas',$data);
	}

}