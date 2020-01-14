<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('Model_home');

	}

	// List all your items
	public function index()
	{
		$data['title'] = 'Daftar Mahasiswa';
		$data['judul'] = 'Saya Sedang Belajar CodeIgniter';
		$data['mahasiswa'] = $this->Model_home->getData()->result();

		$this->load->view('vHome', $data);
	}

	// Add a new item
	public function insert()
	{
		$data['title'] = 'Halaman Tambah';
		$data['judul'] = 'Tambah Data Mahasiswa';
		$this->load->view('vTambah', $data);
	}

	private function _edit($where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		return $this->Model_home->getData();
	}

	//Update one item
	public function edit($nim)
	{
		$data['title'] = 'Halaman Edit';
		$data['judul'] = 'Edit Data Mahasiswa';
		$data['value'] = $this->_edit(array('nim' => $nim))->row();
		$this->load->view('vEdit', $data);
	}

	//Delete one item
	public function delete($id)
	{
		$query = $this->Model_home->hapusData('mahasiswa', array('nim' => $id));
		redirect(site_url('home'));
	}

	// private function _validasi($aksi)
	// {
	// 	$input = $this->input->post();
	// 	if () {
	// 		# code...
	// 	}
	// }

	//Untuk menyimpan data dengan aksi tambah dan ediit
	public function simpan($aksi = 'tambah')
	{
		$input =  $this->input->post();
		
		$data = array(
			'nama_lengkap' => $input['nama_lengkap'],
			'email' => $input['email'],
			'no_handphone' => $input['no_handphone'],
			'program_studi_id' => $input['program_studi_id'],
		);

		if ($input['password'] != null) {
			$data['password'] = md5($input['password']);
		}

		$status = 'GAGAL';
		if ($aksi == 'tambah') {
			$data['nim'] = $input['nim'];
			$query = $this->Model_home->tambahData('mahasiswa', $data);
			if ($query['status'] == 'BERHASIL') {
				$status = 'BERHASIL';
			}
		}else{
			$where['nim'] = $input['nim'];
			$query = $this->Model_home->editData('mahasiswa', $where, $data);
			if ($query['status'] == 'BERHASIL') {
				$status = 'BERHASIL';
			}
		}

		redirect(site_url('home'));
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
