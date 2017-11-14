<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Statistik_model extends CI_Model
{
	var $tabel = "statistik";

	function get_ip($ip,$id){
		$this->db->where('ip',$ip);
		$this->db->where('id_artikel',$id);
		return $this->db->get($this->tabel);
	}
	function insert($data_statistik){
		$this->db->insert($this->tabel,$data_statistik);
	}
	function update($data_statistik,$condition_ip){
		$this->db->where($condition_ip);
		$this->db->update($this->tabel,$data_statistik);
	}
	function get_StatistikByid($id){
		$this->db->where('id_artikel',$id);
		return $this->db->get($this->tabel);
	}
	function get_hitTertinggi(){
		$this->db->order_by('hit','DESC');
		$this->db->limit(10);
		$this->db->join('artikel','artikel.id_artikel = statistik.id_artikel','inner');
		$this->db->join('tag','tag.id_tag = artikel.id_tag','inner');
		return $this->db->get($this->tabel);
	}
}