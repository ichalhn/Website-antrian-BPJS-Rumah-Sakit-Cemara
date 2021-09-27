<?php
class m_petugasrs extends ci_model{
	public function GetDataPetugasrs(){
		$query=$this->db->get('petugas_rs');
		return $query->result_array();
	}
	function hapuspetugasrs($a){
		$this->db->where('ID_PetRS',$a);
		$this->db->delete('petugas_rs');
	}
}