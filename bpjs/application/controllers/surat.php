<?php
/**
* 
*/
class surat extends CI_Controller{
	
function __construct(){
	parent::__construct();
	if($this->session->userdata('jabatan')==null){
				redirect('login');
			}
			
}
	
	public function formsurat(){
		$this->template->load('template','form_surat');
		# code...
	}
	
	public function lihatsurat(){
		$data['result']=$this->m_surat->GetDataSurat();
		$this->template->load('template','view_surat',$data);
	}
	public function viewsurat(){
		$data['result']=$this->m_surat->GetDataSurat2($this->uri->segment(3));
		//$this->template->load('template','view_surat',$data);
		$this->template->load('template','surat_rujukan', $data);
	}
	public function simpan_surat(){
		$config = array(
				array(
				'field' => 'ID_SuratRujukan',
				'label' => 'ID Surat Rujukan',
				'rules' => 'required|alpha_numeric|is_unique[surat_rujukan.ID_SuratRujukan]',
				'errors' => array(
					'required' => '%s tidak boleh kosong',
					'alpha_numeric'=> '%s Hanya Boleh Huruf A - Z dan Angka 0 - 9',
					'is_unique'=>'%s sudah ada di database')
					
				),
				array(
					'field' => 'ID_DokKlinik',
					'label' => 'Nama Dokter Klinik',
					'rules' => 'required',
					'errors' => array(
						'required' => '%s tidak boleh kosong')
						
				),
				array(
					'field' => 'No_KartuBPJS',
					'label' => 'Nomor BPJS',
					'rules' => 'required|numeric',
					'errors' => array(
						'required' => '%s tidak boleh kosong',
						'numeric' => '%s hanya boleh angka 0-9')
				),
				array(
					'field' => 'ID_PetRS',
					'label' => 'Nama Petugas RS',
					'rules' => 'required',
					'errors' => array(
						'required' => '%s tidak boleh kosong')
				),
				array(
					'field' => 'ID_PetKlinik',
					'label' => 'Nama Petugas Klinik',
					'rules' => 'required',
					'errors' => array(
						'required' => '%s tidak boleh kosong')
				),
				array(
					'field' => 'Diagnosa',
					'label' => 'Diagnosa',
					'rules' => 'required|callback_alpha_dash_space',
					'errors' => array(
						'required' => '%s tidak boleh kosong',
						'callback_alpha_dash_space' => '%s hanya boleh huruf A-Z')
						
				)
				
			);
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"> <li>', '</li></div>');
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run() == FALSE){
			//var_dump($_POST);
			$this->template->load('template','form_surat');
		}
		else {
			$data = array(
				'ID_SuratRujukan' => $_POST['ID_SuratRujukan'],
				'ID_DokKlinik' => $_POST['ID_DokKlinik'],
				'No_KartuBPJS' => $_POST['No_KartuBPJS'],
				'ID_PetRS' => $_POST['ID_PetRS'],
				'ID_PetKlinik' => $_POST['ID_PetKlinik'],
				'Diagnosa' => $_POST['Diagnosa'],
				'Tanggal'=>date('Y-m-d')
			);
			
			$this->db->insert('surat_rujukan',$data);
			
			redirect('surat/lihatsurat');
		}
	}
	function alpha_dash_space($str){
			return (! preg_match('/^([a-zA-Z\s])+$/', $str))? FALSE : TRUE;
	}
		
	public function update(){
		# code...
		$config = array(
			/*array(
				'field' => 'ID_SuratRujukan',
				'label' => 'ID Surat Rujukan',
				'rules' => 'required|alpha_numeric',
				'errors' => array(
					'required' => '%s tidak boleh kosong',
					'alpha_numeric'=> '%s Hanya Boleh Huruf A - Z dan Angka 0 - 9'
					)
					
					
				),*/
				array(
					'field' => 'ID_DokKlinik',
					'label' => 'Nama Dokter Klinik',
					'rules' => 'required',
					'errors' => array(
						'required' => '%s tidak boleh kosong')
						
				),
				/*array(
					'field' => 'No_KartuBPJS',
					'label' => 'Nomor BPJS',
					'rules' => 'required|numeric',
					'errors' => array(
						'required' => '%s tidak boleh kosong',
						'numeric' => '%s hanya boleh angka 0-9')
				),*/
				array(
					'field' => 'ID_PetRS',
					'label' => 'Nama Petugas RS',
					'rules' => 'required',
					'errors' => array(
						'required' => '%s tidak boleh kosong')
				),
				array(
					'field' => 'ID_PetKlinik',
					'label' => 'Nama Petugas Klinik',
					'rules' => 'required',
					'errors' => array(
						'required' => '%s tidak boleh kosong')
				),
				array(
					'field' => 'Diagnosa',
					'label' => 'Diagnosa|callback_alpha_dash_space',
					'rules' => 'required',
					'errors' => array(
						'required' => '%s tidak boleh kosong',
						'callback_alpha_dash_space' => '%s hanya boleh huruf A-Z')
						
				)
		);
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"> <li>', '</li></div>');
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run() == FALSE){
			//var_dump($_POST);
			$this->template->load('template','update_surat');
		}
		else {
			if (isset($_POST['btn'])){
				$id = $this->uri->segment(3);
				$data = array(
				'ID_SuratRujukan' => $_POST['ID_SuratRujukan'],
				'ID_DokKlinik' => $_POST['ID_DokKlinik'],
				'No_KartuBPJS' => $_POST['No_KartuBPJS'],
				'ID_PetRS' => $_POST['ID_PetRS'],
				'ID_PetKlinik' => $_POST['ID_PetKlinik'],
				'Diagnosa' => $_POST['Diagnosa'],
				'Tanggal' => date('Y-m-d')
				);
	
				$this->db->where('ID_SuratRujukan',$_POST['ID_SuratRujukan']);
				$this->db->update('surat_rujukan',$data);
				redirect('surat/lihatsurat');
			}
			else{
				$id=$this->uri->segment(3);
				$data = array('ID_SuratRujukan' => $id);
				$this->template->load('template','update_surat',$data);
			}
		}
	}
	function logout()
		{
			$this->session->unset_userdata();
			$this->session->sess_destroy();
			redirect('login');
		}
	public function hapus(){
		# code...
		$id = $this->uri->segment(3);
		$this->m_surat->hapussurat($id);
		redirect('surat/lihatsurat');
	}
}