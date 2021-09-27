<?php
class m_petugas extends ci_model{
	public function GetDataPetugas(){
		$query=$this->db->get('petugas_klinik');
		return $query->result_array();
	}
	function hapuspetugas($a){
		$this->db->where('ID_PetKlinik',$a);
		$this->db->delete('petugas_klinik');
	}
}