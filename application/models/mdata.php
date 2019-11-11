<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mdata extends CI_model{


	public function get_all()
	{
		$query = $this->db->select("*")
				 ->from('mahasiswa')
				 ->order_by('nim', 'DESC')
				 ->get();
		return $query->result();
	}

	public function simpan($data)
	{
		
		$query = $this->db->insert("mahasiswa", $data);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function edit($nim)
	{
		
		$query = $this->db->where("nim", $nim)
				->get("mahasiswa");

		if($query){
			return $query->row();
		}else{
			return false;
		}

	}

	public function update($data, $nim)
	{
		
		$query = $this->db->update("mahasiswa", $data, $nim);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function hapus($nim)
	{
		
		$query = $this->db->delete("mahasiswa", $nim);

		if($query){
			return true;
		}else{
			return false;
		}

	}


}