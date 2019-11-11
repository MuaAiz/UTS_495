<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function __construct(){
		
		parent ::__construct();
		$this->load->model('mdata'); 

	}
	public function index()
	{
		$data = array(
			'title' 	=> 'Data Buku',
			'dahboard'	=> $this->mdata->get_all(),
		);

		$this->load->view('dahboard', $data);
	}

	public function tambah()
	{

		$data = array(
			'title' 	=> 'Tambah Data'
		);
		$this->load->view('tambah_data', $data);
	}
	public function simpan()
	{
		$data = array(

			'nim' 			=> $this->input->post("nim"),
			'nama' 			=> $this->input->post("nama"),
			'jk' 			=> $this->input->post("jk"),
			'alamat' 		=> $this->input->post("alamat"),
			'hp' 			=> $this->input->post("hp"),

		);

		$this->mdata->simpan($data);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
			</div>');

		redirect('buku/');
	}
	public function edit($nim)
	{
		$id_buku = $this->uri->segment(3);
		$data = array(
			'title' 	=> 'Edit Data Buku',
			'dahboard' => $this->mdata->edit($nim)
		);
		$this->load->view('edit_data', $data);
	}
	public function update()
	{
		$id['nim'] = $this->input->post("nim");
		$data = array(

			'nim' 		=> $this->input->post("nim"),
			'nama' 		=> $this->input->post("nama"),
			'jk' 		=> $this->input->post("jk"),
			'alamat' 	=> $this->input->post("alamat"),
			'hp' 		=> $this->input->post("hp"),
		);

		$this->mdata->update($data, $id);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
		</div>');

		redirect('buku/');
	}
	public function hapus($nim)
	{
		$id['nim'] = $this->uri->segment(3);
		$this->mdata->hapus($id);

		redirect('buku/');

	}

}
