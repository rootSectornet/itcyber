<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('logged_in')=="") {
			redirect('Itcyb3r/Auth');
		}
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->model('Anggota_model');
		$this->load->model('Artikel_model');
		$this->load->model('Comment_model');
		$this->load->model('Album_model');
		date_default_timezone_set("Asia/Jakarta");
	}
	public function index()
	{	
		$data['jumlahArtikel'] = $this->Artikel_model->jumlah_artikel();
		$data['jumlahAnggota'] = $this->Anggota_model->jumlahAnggota();
		$data['jumlahalbum'] = $this->Album_model->jumlahalbum();
		$data['comment'] = $this->Comment_model->Comment_BdBaca();
		$data['comment_all'] = $this->Comment_model->Comment_all();
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/menu',$data);
		$this->load->view('backend/dashboard');
		$this->load->view('backend/template/footer');
	}
	public function klik_baca(){
		$data = array(
				'status_coment'	=>	0
			);
		$condition['id_coment'] = $this->input->post('id');
		$this->Comment_model->update($condition,$data);
		echo $this->Comment_model->Comment_BdBaca()->num_rows();
	}
}

// end of file backend 
// itcyber/application/controllers/itcyb3r/backend.php
