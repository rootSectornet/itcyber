<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Comment_model extends CI_Model
{
	var $tabel = "coment";

	function get_comment($id){
		$this->db->where('id_artikel',$id);
		return $this->db->get($this->tabel);
	}
	function insert($data_coment){
		$this->db->insert($this->tabel,$data_coment);
	}
	function Comment_BdBaca(){
		$this->db->where('status_coment',1);
		return $this->db->get($this->tabel);
	}
	function Comment_all(){
		$this->db->order_by('coment.tanggal','DESC');
		$this->db->join('artikel','artikel.id_artikel = coment.id_artikel','inner');
		return $this->db->get($this->tabel);
	}
	function update($condition,$data){
		$this->db->where($condition);
		$this->db->update($this->tabel,$data);
	}
}