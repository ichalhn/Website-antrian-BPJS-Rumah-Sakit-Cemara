<?php
class media extends CI_controller{
	function __construct(){
	parent::__construct();
	if($this->session->userdata('jabatan')==null){
				redirect('login');
			}
			
}
    
    public function view_page(){
	
		/*$config["base_url"] = base_url()."index.php/media/view_page";
        $config["total_rows"] = $this->m_media->Baris();
        $config["per_page"] = 1;
        $config["uri_segment"] = 3;

        $config['first_link'] = FALSE;
        $config['last_link'] = FALSE;

        $config['full_tag_open'] = '<div><ul class="pagination">';
        $config['full_tag_close'] = '</ul></div>';

        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = 'Previous';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);*/
		
       // $data['media'] = $this->m_media->GetDataMedia($this->uri->segment(3), $config["per_page"]);
		
		$a = "select no_antrian from antrian order by no_antrian desc";
		$no = $this->db->query($a)->row();
		if(isset($no)){
			$data['no'] = $no->no_antrian;
		}
		else{
			$data['no'] = "EM-0001";
		}
        $this->template->load('template', 'media', $data);
}
	function tambah_antrian(){
	$a = "select no_antrian from antrian order by no_antrian desc";
	$b = $this->db->query($a);
	//var_dump(isset($b));
	if(isset($b)){
		$c = $b->row()->no_antrian;
		$d = (int)substr($c,3,6);
		$e = $d++;
		
		$char = "EM-";
		$id = $char.sprintf("%03s",$d);
		//echo $d;
		$j = $id;
	}
	else{
		$j = "EM-001";
	}
	
	$ins = array('no_antrian'=>$j, 'tgl_antri'=>date('Y-m-d'));
	$this->db->insert('antrian',$ins);
		$data['no'] = $j;
	redirect('media/antrian');
	}
	
	function antrian(){
	$a = "select no_antrian from antrian order by no_antrian desc";
	$b = $this->db->query($a);
	//var_dump(isset($b));
	if(isset($b)){
		$c = $b->row()->no_antrian;
		$d = (int)substr($c,3,6);
		//$e = $d++;
		
		$char = "EM-";
		$id = $char.sprintf("%03s",$d);
		//echo $d;
		$j = $id;
	}
	else{
		$j = "EM-001";
	}
	
	
		$data['no'] = $j;
	$this->template->load('template', 'media', $data);
	}
	
	function prints(){
		//echo $j;
		$a = "select no_antrian from antrian order by no_antrian desc";
	$b = $this->db->query($a);
	//var_dump(isset($b));
	if(isset($b)){
		$c = $b->row()->no_antrian;
		$d = (int)substr($c,3,4);
		$e = $d;
		$char = "EM-";
		$id = $char.sprintf("%03s",$d);
		$j = $id;
	}
	else{
		$j = "EM-001";
	}
	
	$pdf = new TCPDF('L','mm','A7');
        $pdf->AddPage();

        //judul
        $html = "<center> Nomor Antrian Anda di EYEMEDICA :
<br>".
$j."<br>
Tanggal Pelayanan ". date('d-m-Y') ."<br>
Harap datang maksimal 15 menit sebelum waktu giliran anda
</center>";
$pdf->writeHTML($html, true, false, true, false,'');
		ob_end_clean();
        $pdf->output(date('d-m-Y').$j.".pdf", 'D');
	}
	function add(){
				$config["base_url"] = base_url()."index.php/media/view_page";
        $config["total_rows"] = $this->m_media->Baris();
        $config["per_page"] = 1;
        $config["uri_segment"] = 3;

        $config['first_link'] = FALSE;
        $config['last_link'] = FALSE;

        $config['full_tag_open'] = '<div><ul class="pagination">';
        $config['full_tag_close'] = '</ul></div>';

        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = 'Previous';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
		
        $data['media'] = $this->m_media->GetDataMedia($this->uri->segment(3), $config["per_page"]);
		
		$a = "select no_antrian from antrian order by no_antrian desc";
		$no = $this->db->query($a)->row();
		if(isset($no)){
			$data['no'] = $no->no_antrian;
		}
		else{
			$data['no'] = "EM-0001";
		}
        $this->template->load('template', 'media', $data);
	}
}