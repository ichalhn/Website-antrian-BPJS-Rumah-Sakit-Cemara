<?php
class m_pasien extends ci_model{
	public function GetDataPasien(){
		$query=$this->db->get('pasien');
		return $query->result_array();
	}
	function hapuspasien($a){
		$this->db->where('No_KartuBPJS',$a);
		$this->db->delete('pasien');
	}
}