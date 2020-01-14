<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_home extends CI_Model {

    public function getData() {
    	$this->db->select('*');
    	$this->db->from('mahasiswa m');
    	$this->db->join('program_studi ps', 'm.program_studi_id = ps.program_studi_id', 'left' );
    	$this->db->join('fakultas f', 'ps.fakultas_id = f.fakultas_id', 'left' );
    	return $this->db->get();
	}

	public function tambahData($tabel, $data)
	{
		if ($this->db->insert($tabel, $data)) {
			return array(
				'status' => 'BERHASIL',
				'in' => $this->db->insert_id()
			);
		} else {
			return array(
				'status' => 'GAGAL',
			);
		}
	}

	public function editData($tabel, $where, $data)
	{
		$this->db->where($where);
		if ($this->db->update($tabel, $data)) {
			return array(
				'status' => 'BERHASIL',
			);
		} else {
			return array(
				'status' => 'GAGAL',
			);
		}
	}

	public function hapusData($tabel, $where)
	{
		$this->db->where($where);
		if ($this->db->delete($tabel)) {
			return array(
				'status' => 'BERHASIL',
			);
		} else {
			return array(
				'status' => 'GAGAL',
			);
		}
	}

}

/* End of file Model_home.php */
/* Location: ./application/models/Model_home.php */