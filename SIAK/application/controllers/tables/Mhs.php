<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhs extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('Mod_mhs');

	}

	// List all your items
	public function index()
	{
		$data['mhs']		= $this->Mod_mhs->get()->result();
		$data['title']		= 'Mahasiswa';
		$this->load->view('mahasiswa/indexMhs', $data);

	}

	// Add a new item
	public function add()
	{

	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}
}

/* End of file Mhs.php */
/* Location: ./application/controllers/tables/Mhs.php */
