<?php
/**
* 
*/
class Pasien extends CI_Controller{
	function __construct(){
	parent::__construct();
	if($this->session->userdata('jabatan')==null){
				redirect('login');
			}
			
}
	public function formpasien(){
		$this->template->load('template','form_pasien');
		# code...
	}
	public function lihatpasien(){
		$data['result']=$this->m_pasien->GetDataPasien();
		$this->template->load('template','view_pasien',$data);
	}
	public function simpan_pasien(){
		$config = array(
				array(
				'field' => 'No_KartuBPJS',
				'label' => 'No BPJS',
				'rules' => 'required|alpha_numeric|is_unique[pasien.No_KartuBPJS]',
				'errors' => array(
					'required' => '%s tidak boleh kosong',
					'alpha_numeric'=> '%s Hanya Boleh Huruf A - Z dan Angka 0 - 9',
					'is_unique'=>'%s sudah ada di database')
					
				),
				array(
					'field' => 'UserID',
					'label' => 'User ID',
					'rules' => 'required|is_unique[pasien.UserID]',
					'errors' => array(
						'required' => '%s tidak boleh kosong',
						'is_unique'=>'%s sudah ada di database') 	
				),
				array(
					'field' => 'No_NIK',
					'label' => 'Nomor NIK',
					'rules' => 'required|numeric',
					'errors' => array(
						'required' => '%s tidak boleh kosong',
						'numeric' => '%s hanya boleh angka 0-9')
				),
				array(
					'field' => 'Nama_Pasien',
					'label' => 'Nama Pasien',
					'rules' => 'required|alpha_dash_space',
					'errors' => array(
						'required' => '%s tidak boleh kosong',
						'alpha_dash_space' => '%s hanya boleh huruf A-Z')
				),
				array(
					'field' => 'Umur',
					'label' => 'Usia',
					'rules' => 'required|numeric',
					'errors' => array(
						'required' => '%s tidak boleh kosong',
						'numeric' => '%s hanya boleh angka 0-9')
				),
				array(
					'field' => 'Alamat',
					'label' => 'Alamat',
					'rules' => 'required',
					'errors' => array(
						'required' => '%s tidak boleh kosong')
				),
				
				array(
					'field' => 'Gender',
					'label' => 'Jenis Kelamin',
					'rules' => 'required',
					'errors' => array(
						'required' => '%s tidak boleh kosong')
				),
			);
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"> <li>', '</li></div>');
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run() == FALSE){
			//var_dump($_POST);
			$this->template->load('template','form_pasien');
		}
		else {
			$data = array(
				'No_KartuBPJS' => $_POST['No_KartuBPJS'],
				'UserID' => $_POST['UserID'],
				'Nama_Pasien' => $_POST['Nama_Pasien'],
				'No_NIK' => $_POST['No_NIK'],
				'Umur' => $_POST['Umur'],
				'Alamat' => $_POST['Alamat'],
				'Gender' => $_POST['Gender']
			);
			
			$this->db->insert('pasien',$data);
			
			redirect('Pasien/lihatpasien');
		}
	}
		function alpha_dash_space($str){
			return (! preg_match('/^([a-zA-Z\s])+$/', $str))? FALSE : TRUE;
	}
	public function update(){
		# code...
		$config = array(
			array(
				'field' => 'No_KartuBPJS',
				'label' => 'No BPJS',
				'rules' => 'required|alpha_numeric',
				'errors' => array(
					'required' => '%s tidak boleh kosong',
					'alpha_numeric'=> '%s Hanya Boleh Huruf A - Z dan Angka 0 - 9')
					
				),
				array(
					'field' => 'UserID',
					'label' => 'User ID',
					'rules' => 'required',
					'errors' => array(
						'required' => '%s tidak boleh kosong')
				),
				array(
					'field' => 'No_NIK',
					'label' => 'Nomor NIK',
					'rules' => 'required|numeric',
					'errors' => array(
						'required' => '%s tidak boleh kosong',
						'numeric' => '%s hanya boleh angka 0-9')
				),
				array(
					'field' => 'Nama_Pasien',
					'label' => 'Nama Pasien',
					'rules' => 'required|alpha_dash_space',
					'errors' => array(
						'required' => '%s tidak boleh kosong',
						'alpha_dash_space' => '%s hanya boleh huruf A-Z')
				),
				array(
					'field' => 'Umur',
					'label' => 'Usia',
					'rules' => 'required|numeric',
					'errors' => array(
						'required' => '%s tidak boleh kosong',
						'numeric' => '%s hanya boleh angka 0-9')
				),
				array(
					'field' => 'Alamat',
					'label' => 'Alamat',
					'rules' => 'required',
					'errors' => array(
						'required' => '%s tidak boleh kosong')
				),
				
				array(
					'field' => 'Gender',
					'label' => 'Jenis Kelamin',
					'rules' => 'required',
					'errors' => array(
						'required' => '%s tidak boleh kosong')
				),
		);
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"> <li>', '</li></div>');
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run() == FALSE){
			//var_dump($_POST);
			$this->template->load('template','update_pasien');
		}
		else {
			if (isset($_POST['btn'])){
				$id = $this->uri->segment(3);
				$data = array(
				'No_KartuBPJS' => $_POST['No_KartuBPJS'],
				'UserID' => $_POST['UserID'],
				'No_NIK' => $_POST['No_NIK'],
				'Nama_Pasien' => $_POST['Nama_Pasien'],
				'Umur' => $_POST['Umur'],
				'Alamat' => $_POST['Alamat'],
				'Gender' => $_POST['Gender']
				);
	
				$this->db->where('No_KartuBPJS',$id);
				$this->db->update('pasien',$data);
				redirect('Pasien/lihatpasien');
			}
			else{
				$id=$this->uri->segment(3);
				$data = array('No_KartuBPJS' => $id);
				$this->template->load('template','update_pasien',$data);
			}
		}
	}
	public function hapus(){
		# code...
		$id = $this->uri->segment(3);
		$this->m_pasien->hapuspasien($id);
		redirect('Pasien/lihatpasien');
	}
}