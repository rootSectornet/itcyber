<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Log_model extends CI_Model
{
	var $tabel = "log";
	function input_log($data_login){
		$this->db->insert($this->tabel,$data_login);
	}

}