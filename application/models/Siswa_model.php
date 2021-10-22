<?php 

	/**
	 * kelas model siswa
	 */
	class Siswa_model extends CI_Model
	{
		
		function AddData($table, $data = array())
		{
			$this->db->insert($table, $data);
		}

		function UpdateData($table,$fieldid,$fieldvalue,$data = array())
		{
			$this->db->where($fieldid,$fieldvalue)->Update($table,$data);
		}

		function DeleteData($table,$fieldid,$fieldvalue)
		{
			$this->db->where($fieldid,$fieldvalue)->delete($table);
		}

		function GetData($table)
		{
			$query = $this->db->get($table);
			return $query->result();
		}

		function GetDataWhere($table,$id,$nilai)
		{
			$this->db->where($id,$nilai);
			$query = $this->db->get($table);
			return $query;
		}
	}


 ?>