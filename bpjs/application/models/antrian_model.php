<?php
class antrian_model extends CI_model{
	
	public function AmbilNoTransaksi(){
		//kode transaksi otomatis
		
		$query = $this->db->get('antrian');
		if($query->num_rows() == 0){
			$this->db->select_max('no_antrian');
			$no_antrian = $this->db->get('antrian')->row()->no_antrian;
			$no_antrian =$no_antrian + 1;
			$input = array(
				'no_antrian' => $no_antrian,
				'tgl_antri' => '0000-00-00',
				
			);
			$this->db->insert('antrian', $input);
		}else{
			$no_antrian = $query->row()->no_antrian;
		}
		return $no_antrian;
	}
	public function Baris(){
       return $this->db->get('media')->num_rows();
    }
public function GetDataMedia($start, $limit){

		$this->db->limit($limit, $start);
        return $this->db->get('media')->result_array();
    }
}
?>