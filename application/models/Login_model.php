<?php 

/**
 * kelas login model
 */
class Login_model extends CI_Model
{
	var $_tabel = 'login';
	
	function cek_user($username,$password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$result = $this->db->get($this->_tabel);
		return $result;
	}
}

 ?>