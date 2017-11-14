<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galery extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('date');
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('Anggota_model');
		$this->load->model('Artikel_model');
		$this->load->model('Tag_model');
		$this->load->model('Portfolio_model');
		$this->load->model('Galery_model');
		$this->load->model('Album_model');
	}
	public function index(){
		$data['album'] = $this->Album_model->get_all();
		$json_data = array();
		foreach ($this->Album_model->get_all()->result() as $al) {
			foreach ($this->Galery_model->get_allForalbum($al->id_album)->result() as $gal) {
				$test = array(
							'id_galery'	=>	$gal->id_galery,
							'link'		=>	$gal->link,
							'caption'	=>	$gal->caption,
							'id_album'	=>	$gal->id_album,
							'album'		=>	$al->album
					);
				array_push($json_data, $test);
			}
		}
		$data['json'] = json_encode($json_data);
		$this->load->view('front/galery/album',$data);
	}
	public function view_album($id,$album){
		$this->load->library('pagination');
		$jumlah_data = $this->Galery_model->jumlah_galery($id);
		$config['base_url'] = base_url().'galery/view_album/'.$id.'/'.$album.'/';
		$config['total_rows'] = $jumlah_data;
		$config['use_page_numbers'] = TRUE;
		$config['per_page'] = 20;//Tambahan untuk styling
        $config['full_tag_open']    = '<ul class="pagination">';
        $config['full_tag_close']   = '</ul>';
        $config['first_link']       = false;
        $config['last_link']        = false;
        $config['first_tag_open']   = '<li id="pag">';
        $config['first_tag_close']  = '</li>';
        $config['prev_link']        = '&laquo';
        $config['prev_tag_open']    = '<li class="prev" id="pag">';
        $config['prev_tag_close']   = '</li>';
        $config['next_link']        = '&raquo';
        $config['next_tag_open']    = '<li id="pag">';
        $config['next_tag_close']   = '</li>';
        $config['last_tag_open']    = '<li id="pag">';
        $config['last_tag_close']   = '</li>';
        $config['cur_tag_open']     = '<li class="active" id="pag"><a href="">';
        $config['cur_tag_close']    = '</a></li>';
        $config['num_tag_open']     = '<li id="pag">';
        $config['num_tag_close']    = '</li>';
        $config['anchor_class'] = 'class="as" ';
		$from = $this->uri->segment(5);
		$this->pagination->initialize($config);
		$data['galery'] = $this->Galery_model->get_for_pag($config['per_page'],$from,$id);
		$this->load->view('front/galery/index',$data);
	}

	public function portfolio(){
		$data['portfolio'] = $this->Portfolio_model->get_all();
		$this->load->view('front/galery/portfolio',$data);
	}
}
