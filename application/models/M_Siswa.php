<?php
class M_Siswa extends CI_Model{
	function data_siswa(){
		$query = $this->db->query("select * from siswa");
		return $query;

	}
	function simpan(){
	$data = array('username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'nama_lengkap' => $this->input->post('namalengkap'));
	$insert = $this->db->insert('siswa',$data);
	}
	
}