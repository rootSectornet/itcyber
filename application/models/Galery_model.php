<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Galery_model extends CI_Model
{
	var $tabel = "galery";

	function get_all($id){
		$this->db->where('id_album',$id);
		return $this->db->get($this->tabel);
	}
	function insert($data){
		$this->db->insert($this->tabel,$data);
	}
	function update($condition,$data){
		$this->db->where($condition);
		$this->db->update($this->tabel,$data);
	}
	function delete($condition){
		$this->db->where($condition);
		$this->db->delete($this->tabel);
	}
	function jumlah_galery($id){
		$this->db->where('id_album',$id);
		return $this->db->get($this->tabel)->num_rows();
	}
	function get_for_pag($num,$offset,$id){
		$this->db->where('id_album',$id);
		$this->db->order_by('tanggal','ASC');
		return $this->db->get($this->tabel,$num,$offset);
	}
	function delete_withAlbum($id){
		$this->db->where('id_album',$id);
		$this->db->delete($this->tabel);
	}
	function get_allForalbum($id){
		$this->db->where('id_album',$id);
		$this->db->order_by('tanggal','DESC');
		$this->db->limit(1);
		return $this->db->get($this->tabel);
	}
	function get_BYid($id){
		$this->db->where('author',$id);
		$this->db->join('album','galery.id_album = album.id_album','inner');
		return $this->db->get($this->tabel);
	}
}