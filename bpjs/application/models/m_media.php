<?php
class m_media extends ci_model{

public function Baris(){
       return $this->db->get('media')->num_rows();
    }
public function GetDataMedia($start, $limit){

		$this->db->limit($limit, $start);
        return $this->db->get('media')->result_array();
    }
}
?>