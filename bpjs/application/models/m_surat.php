<?php
class m_surat extends ci_model{
	public function GetDataSurat(){
		
		$this->db->select('ID_SuratRujukan, Nama_DokKlinik, a.No_KartuBPJS, Nama_PetRS, Nama_PetKlinik, Diagnosa, Tanggal');
		$this->db->from('surat_rujukan');
		$this->db->join('dokter_klinik', 'dokter_klinik.ID_DokKlinik = surat_rujukan.ID_DokKlinik');
		$this->db->join('pasien a', 'a.No_KartuBPJS = surat_rujukan.No_KartuBPJS');
		$this->db->join('petugas_klinik', 'petugas_klinik.ID_PetKlinik = surat_rujukan.ID_PetKlinik');
		$this->db->join('petugas_rs', 'petugas_rs.ID_PetRS = surat_rujukan.ID_PetRS');
		
		$query = $this->db->get();	
		return $query->result_array();
	}
	public function GetDataSurat2($id){
		$query=$this->db->where('ID_SuratRujukan', $id)->get('surat_rujukan');
		return $query->row();
	}
	function hapussurat($a){
		$this->db->where('ID_SuratRujukan',$a);
		$this->db->delete('surat_rujukan');
	}
}