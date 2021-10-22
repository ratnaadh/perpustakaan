<?php 

	/**
	 * 
	 */
	class Peminjaman_model extends CI_Model
	{
		
		function AddData($tabel, $data = array())
		{
			$this->db->insert($tabel, $data);
		}

		function UpdateData($tabel,$fieldid,$fieldvalue,$data=array())
		{
			$this->db->where($fieldid,$fieldvalue)->update($tabel,$data);
		}

		function DeleteData($tabel,$fieldid,$fieldvalue)
		{
			$this->db->where($fieldid,$fieldvalue)->delete($tabel);
		}

		function GetData($tabel)
    	{
        $query= $this->db->get($tabel);
        return $query->result();
    	}

    	function GetDataWhere($tabel,$id,$nilai)
    	{
        $this->db->where($id,$nilai);
        $query= $this->db->get($tabel);
        return $query;
    	}

    	function getAll()
        {
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->join('siswa', 'peminjaman.id_siswa = siswa.id_siswa');
        $this->db->join('buku', 'peminjaman.id_buku = buku.id_buku');
        $query = $this->db->get();
        return $query->result();
        }

        function GetDataJoinWhere($tabel1, $tabel2, $tabel3, $onjoin, $id, $data)
    {

        $this->db->select('*');
        $this->db->from($tabel1);
        $this->db->from($tabel2);
        $this->db->join($tabel3, $onjoin);
        $this->db->where($id, $data);
        $query = $this->db->get();
        return $query;
    }
	}

 ?> 