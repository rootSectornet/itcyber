<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('date');
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('Anggota_model');
		$this->load->model('Artikel_model');
		$this->load->model('Comment_model');
		$this->load->model('Statistik_model');		
		$this->load->library('user_agent');
		$this->load->model('Tag_model');
	}
	public function index()
	{			
		$this->load->library('pagination');
		$jumlah_data = $this->Artikel_model->jumlah_artikel();
		$config['base_url'] = base_url().'artikel/index'; //URL ON CONTROLLER
		$config['total_rows'] = $jumlah_data; // JUMLAH KESELURUHAM DATA
		$config['use_page_numbers'] = TRUE;
		$config['per_page'] = 15; //JUMLAH DATA YANG DITAMPILKAN
        $config['full_tag_open']    = '<ul class="pagination">'; //MEMBUAT PAGINATION
        $config['full_tag_close']   = '</ul>'; // PENUTUP PAGINATION
        $config['first_link']       = false; //
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
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['popular_artikel'] = $this->Statistik_model->get_hitTertinggi();
		$data['artikel'] = $this->Artikel_model->front_all($config['per_page'],$from);
		$data['tag'] = $this->Tag_model->get_all();
		$this->load->view('front/artikel/index',$data);
	}

	// start of detail
		 function detail($id, $judul){
			foreach ($this->Statistik_model->get_ip($this->input->ip_address(),$id)->result() as $ip) {
				$hits = $ip->hit;
				$id_statistik = $ip->id_statistik;
			}
			if ($id != 0) {
				if ($this->Statistik_model->get_ip($this->input->ip_address(),$id)->num_rows() > 0 ) {
					$data_statistik = array(
							'tanggal'		=>	date('Y-m-d'),
							'hit'			=>	$hits + 1,
							'os'			=>	$this->agent->platform(),
							'browser'		=>	$this->agent->browser(),
							'time'			=>	date('H:i:s')
						);
					$condition_ip['id_statistik'] = $id_statistik;
					$this->Statistik_model->update($data_statistik,$condition_ip);
				}else{
					$data_statistik = array(
							'tanggal'		=>	date('Y-m-d'),
							'hit'			=>	1,
							'os'			=>	$this->agent->platform(),
							'browser'		=>	$this->agent->browser(),
							'id_artikel'	=>	$id,
							'time'			=>	date('H:i:s'),
							'ip'			=>	$this->input->ip_address()
						);
					$this->Statistik_model->insert($data_statistik);
				}
			}
			foreach ($this->Statistik_model->get_StatistikByid($id)->result() as $st) {
				$hit = $st->hit;
			}
			$data['get_statistik'] = $hit;
			$data['popular_artikel'] = $this->Statistik_model->get_hitTertinggi();
			$data['get_coment'] = $this->Comment_model->get_comment($id);
			$data['detailArtikel'] = $this->Artikel_model->get_Byid($id);
			$data['tag'] = $this->Tag_model->get_all();
			$this->load->view('front/artikel/detail',$data);
		}
	// end of detail

	// start artikel by tag
		public function tag($id,$name_tag){
			$this->load->library('pagination');
			$jumlah_data = $this->Artikel_model->jumlah_artikelBytag($id);
			$config['base_url'] = base_url().'artikel/tag/'.$id.'/'.$name_tag;
			$config['total_rows'] = $jumlah_data;
			$config['use_page_numbers'] = TRUE;
			$config['per_page'] = 15;//Tambahan untuk styling
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
			$data['popular_artikel'] = $this->Statistik_model->get_hitTertinggi();
			$data['artikel'] = $this->Artikel_model->artikelBytag($config['per_page'],$from,$id);
			$data['tag'] = $this->Tag_model->get_all();
			$data['tags'] = $name_tag;
			$this->load->view('front/artikel/per_tag',$data);
		}
	// end artikel by tag
	// start input comment
		public function input_comment(){
			$data_coment = array(
						'id_artikel'	=>	$this->input->post('id'),
						'user_coment'	=>	$this->input->post('nama'),
						'tanggal'		=>	date('Y-m-d'),
						'status_coment'	=>	1,
						'coment'		=>	$this->input->post('coment')
				);
			$this->Comment_model->insert($data_coment);
			$data['get_coment'] = $this->Comment_model->get_comment($this->input->post('id'));
			$this->load->view('front/artikel/coment',$data);
		}
	// end input comment
	// start searching artikel 
		public function searching_artikel(){
			$cari = $this->input->post('cari');
			$data['cari'] = $cari;
			$data['searching'] = $this->Artikel_model->searching($cari);
			$this->load->view('front/artikel/searching_artikel',$data);
		}
	// end start searching artikel
}
