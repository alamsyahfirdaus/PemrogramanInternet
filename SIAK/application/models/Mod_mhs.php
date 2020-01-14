<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_mhs extends CI_Model {

	public function get()
	{
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->join('program_studi', 'mahasiswa.program_studi_id = program_studi.program_studi_id', 'left');
		$this->db->join('fakultas', 'program_studi.fakultas_id = fakultas.fakultas_id', 'left');

		return $this->db->get();
	}
	

}

/* End of file Mod_mhs.php */
/* Location: ./application/models/Mod_mhs.php */