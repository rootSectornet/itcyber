<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Artikel_model extends CI_Model
{
	var $tabel = "artikel";

	function get_all(){
		$this->db->join('tag','tag.id_tag = artikel.id_tag','inner');
		$this->db->order_by('tanggal','ASC');
		return $this->db->get($this->tabel);
	}
	function get_by_tag($id){
		$this->db->where('id_tag',$id);
		return $this->db->get($this->tabel);
	}
	function insert($data){
		$this->db->insert($this->tabel,$data);
	}
	function get_Byid($id){
		$this->db->where('id_artikel',$id);
		$this->db->join('tag','tag.id_tag = artikel.id_tag','inner');
		$this->db->join('anggota','anggota.id_anggota = artikel.author','inner');
		return $this->db->get($this->tabel);
	}
	function update($condition,$data){
		$this->db->where($condition);
		$this->db->update($this->tabel,$data);
	}
	function delete($id){
		$this->db->where($id);
		$this->db->delete($this->tabel);
	}
	function get_six_artikel(){
		$this->db->join('anggota','anggota.id_anggota = artikel.author','inner');
		$this->db->join('tag','tag.id_tag = artikel.id_tag','inner');
		$this->db->order_by('tanggal','ASC');
		$this->db->limit(8);
		return $this->db->get($this->tabel);
	}
	function searching($cari){
		$this->db->like('judul',$cari);
		$this->db->join('anggota','anggota.id_anggota = artikel.author','inner');
		$this->db->join('tag','tag.id_tag = artikel.id_tag','inner');
		$this->db->order_by('tanggal','ASC');
		return $this->db->get($this->tabel);
	}
	function jumlah_artikel(){
		return $this->db->get($this->tabel)->num_rows();
	}
	function jumlah_artikelBytag($id){
		$this->db->where('id_tag',$id);
		return $this->db->get($this->tabel)->num_rows();
	}
	function front_all($num,$offset){
		$this->db->join('tag','tag.id_tag = artikel.id_tag','inner');
		$this->db->order_by('tanggal','ASC');
		return $this->db->get($this->tabel,$num,$offset);
	}
	function artikelBytag($num,$offset,$id){
		$this->db->where('id_tag',$id);
		$this->db->order_by('tanggal','ASC');
		return $this->db->get($this->tabel,$num,$offset);
	}
	function get_byAuthor($id){
		$this->db->where('author',$id);
		$this->db->join('tag','tag.id_tag = artikel.id_tag','inner');
		$this->db->join('statistik','statistik.id_artikel = artikel.id_artikel','inner');
		$this->db->order_by('artikel.tanggal','DESC');
		return $this->db->get($this->tabel);
	}
}