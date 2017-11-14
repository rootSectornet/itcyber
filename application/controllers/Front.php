<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('date');
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('Anggota_model');
		$this->load->model('Artikel_model');
		$this->load->model('Tag_model');
	}
	public function index()
	{	
		$data['artikel'] = $this->Artikel_model->get_six_artikel();
		$data['anggota'] = $this->Anggota_model->get_aktif_jabatan();
		$this->load->view('front/index',$data);
	}
	public function detail($id, $judul){

		$this->load->view('welcome_message');
	}
	// start of send contact
		public function send_contact(){

			    $nama = $this->input->post('contactName');
			    $emails = $this->input->post('contactEmail');
			    $subject = $this->input->post('contactSubject');
			    $message = $this->input->post('contactMessage');
			 $ci = get_instance();
			 $ci->load->library('email');  
			$config = array();  
			$config['smtp_keepalive'] = TRUE;
			$config['protocol'] = 'smtp';  
			$config['smtp_host'] = 'srv39.niagahoster.com';  
			$config['smtp_user'] = 'hello@itcyber.or.id';  
			$config['smtp_pass'] = 'root12345@';  
			$config['smtp_port'] = 465;  
			$config['smtp_crypto'] ='ssl';
			$config['charset'] = 'iso-8859-1';
			$config['smtp_timeout'] = 4;
			$config['wordwrap'] = TRUE;
			$this->email->set_newline("\r\n");
			$ci->email->initialize($config);
	        $ci->email->from($emails,'Contact Us');
	        $ci->email->to('hello@itcyber.or.id');
	        $ci->email->subject($subject);
	        $ci->email->message($message);
				// $config['mailtype'] = 'html';
				// $this->email->initialize($config);
				// $this->email->to('hello@itcyber.or.id');
				// $this->email->from($emails);
				// $this->email->subject($subject);
				// $this->email->message($message);
			        if ($this->email->send()) {
			            echo 'Email sent.';
			        } else {
			            show_error($this->email->print_debugger());
			        }
		}
	// end of send contact
	// start proses cari
		public function searching(){
			$cari = $this->input->post('cari');
			$data['cari'] = $cari;
			$data['searching'] = $this->Artikel_model->searching($cari);
			$this->load->view('front/proses/searching',$data);
		}
	// end proses cari
	// start of about
		public function about(){
			$this->load->view('front/about');
		}
	// end of about
	public function testing(){
		return json_encode($this->Anggota_model->get_all()->result());
	}
}
