<?php 
defined ('BASEPATH') OR exit ('No direct script allowed');

class Home_model extends CI_Model {
	
	public function __construct() {
		$this->load->database();
	}

	public function get_tugas() {
		$query = $this->db->get('tugas');
		return $query->result_array();
	}

	public function get_detail($id) {
		$query = $this->db->get_where('tugas',array('id'=>$id));
		return $query->row_array();
	}

	public function set_tugas() {
		$data = array(
			'tugas' => $this->input->post('input_tugas'),
			'deskripsi' => $this->input->post('input_deskripsi'),
			'prioritas' => $this->input->post('input_prioritas')
		);

		return $this->db->insert('tugas',$data);
	}

	public function delete_tugas($id) {
		$this->db->delete('tugas',array('id'=>$id));
	}

	public function update_tugas($id) {
		/*$data = array(
			'id' => $this->input->post('input_id'),
			'tugas' => $this->input->post('input_tugas'),
			'deskripsi' => $this->input->post('input_deskripsi'),
			'prioritas' => $this->input->post('input_prioritas')
		);
		$this->db->where('tugas', $data);*/

		$id = $this->input->post('input_id');
		$tugas = $this->input->post('input_tugas');
		$deskripsi = $this->input->post('input_deskripsi');
		$prioritas = $this->input->post('input_prioritas');

		$sql = "UPDATE tugas set tugas = '" . $tugas . "', deskripsi = '" . $deskripsi . "' , prioritas = '" . $prioritas . "' WHERE id= '" . $id . "';";
		$this->db->query($sql);
	}
}