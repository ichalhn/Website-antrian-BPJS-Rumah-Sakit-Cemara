<?php
class m_dokter extends ci_model{
	public function GetDataDokter(){
		$query=$this->db->get('dokter_klinik');
		return $query->result_array();
	}
	function hapusdokter($a){
		$this->db->where('ID_DokKlinik',$a);
		$this->db->delete('dokter_klinik');
	}
}