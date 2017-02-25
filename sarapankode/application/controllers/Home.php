<?php
defined ('BASEPATH') OR exit ('No direct script allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('home_model');
	}

	public function index() {
		$data['tugas'] = $this->home_model->get_tugas();
		$data['title'] = '#{SarapanKode}';
		$this->load->view('templates/header',$data);
		$this->load->view('home',$data);
		$this->load->view('templates/footer');

	}

	public function view($id = NULL) {
		$data['detail'] = $this->home_model->get_detail($id);
		$data['title'] = 'Detail';

		if(empty($data['detail'])) {
			show_404();
		}

		$this->load->view('templates/header',$data);
		$this->load->view('view',$data);
		$this->load->view('templates/footer');
	}

	public function tambah() {
		if(!isset($_POST['submit'])) {
			$data['title'] = 'Tambah Data';
			$this->load->view('templates/header',$data);
			$this->load->view('tambah');
			$this->load->view('templates/footer');
		} else {
			$this->home_model->set_tugas();
			redirect('home');
		}		
	}

	public function delete($id = NULL) {
		$this->home_model->delete_tugas($id);
		redirect('home');
	}

	public function update($id = NULL) {
		$data['title'] = 'Update Data';
		$data['detail'] = $this->home_model->get_detail($id);
		
		if(!isset($_POST['submit'])) {
			$this->load->view('templates/header',$data);
			$this->load->view('update', $data);
			$this->load->view('templates/footer');

			
		} else {
			$this->load->view('templates/header',$data);
			$this->load->view('update', $data);
			$this->load->view('templates/footer');

			$this->home_model->update_tugas($id);
			redirect('home');
		}
		
	}

	public function cetak() {
		$data['detail'] = $this->home_model->get_tugas();
		$this->load->view('cetak',$data);
		//$this->load->view('cetak');
	}

	public function stats() {
		$data['title'] = 'Statistika';
		$this->load->view('templates/header',$data);
		$this->load->view('stats');
		$this->load->view('templates/footer');
	}

	public function ekspor() {
		$data['detail'] = $this->home_model->get_tugas();
		$this->load->view('ekspor',$data);
	}
}