<?php
	class m_login extends CI_Model
	{
		public function cek($username,$password)
		{
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			return $this->db->get('akun');
		}

		public function input($data)
		{
			$this->db->insert('akun',$data);
		}
	}

?>