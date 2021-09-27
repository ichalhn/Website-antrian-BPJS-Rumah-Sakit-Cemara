<?php
/**
* 
*/
class Petugasrs extends CI_Controller{
	function __construct(){
	parent::__construct();
	if($this->session->userdata('jabatan')==null){
				redirect('login');
			}
			
}
	public function formpetugasrs(){
		$this->template->load('template','form_petugasrs');
		# code...
	}
	public function lihatpetugasrs(){
		$data['result']=$this->m_petugasrs->GetDataPetugasrs();
		$this->template->load('template','view_petugasrs',$data);
	}
	public function simpan_petugasrs(){
		$config = array(
				array(
				'field' => 'ID_PetRS',
				'label' => 'ID Petugas Rumah Sakit',
				'rules' => 'required|alpha_numeric|is_unique[petugas_rs.ID_PetRS]',
				'errors' => array(
					'required' => '%s tidak boleh kosong',
					'alpha_numeric'=> '%s Hanya Boleh Huruf A - Z dan Angka 0 - 9',
					'is_unique'=>'%s sudah ada di database')
					
				),
				array(
					'field' => 'UserID',
					'label' => 'User ID',
					'rules' => 'required',
					'errors' => array(
						'required' => '%s tidak boleh kosong')
				),
				array(
					'field' => 'Nama_PetRS',
					'label' => 'Nama Petugas Rumah Sakit',
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
			$this->template->load('template','form_petugasrs');
		}
		else {
			$data = array(
				'ID_PetRS' => $_POST['ID_PetRS'],
				'UserID' => $_POST['UserID'],
				'Nama_PetRS' => $_POST['Nama_PetRS'],
				'Umur' => $_POST['Umur'],
				'Alamat' => $_POST['Alamat'],
				'Gender' => $_POST['Gender']
			);
			
			$this->db->insert('petugas_rs',$data);
			
			redirect('Petugasrs/lihatpetugasrs');
		}
	}
		function alpha_dash_space($str){
			return (! preg_match('/^([a-zA-Z\s])+$/', $str))? FALSE : TRUE;
	}
	public function update(){
		# code...
		$config = array(
			array(
				'field' => 'ID_PetRS',
				'label' => 'ID Petugas Rumah Sakit',
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
					'field' => 'Nama_PetRS',
					'label' => 'Nama Petugas Rumah Sakit',
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
			$this->template->load('template','update_petugasrs');
		}
		else {
			if (isset($_POST['btn'])){
				$id = $this->uri->segment(3);
				$data = array(
				'ID_PetRS' => $_POST['ID_PetRS'],
				'UserID' => $_POST['UserID'],
				'Nama_PetRS' => $_POST['Nama_PetRS'],
				'Umur' => $_POST['Umur'],
				'Alamat' => $_POST['Alamat'],
				'Gender' => $_POST['Gender']
				);
	
				$this->db->where('ID_PetRS',$id);
				$this->db->update('petugas_rs',$data);
				redirect('Petugasrs/lihatpetugasrs');
			}
			else{
				$id=$this->uri->segment(3);
				$data = array('ID_PetRS' => $id);
				$this->template->load('template','update_petugasrs',$data);
			}
		}
	}
	public function hapus(){
		# code...
		$id = $this->uri->segment(3);
		$this->m_petugasrs->hapuspetugasrs($id);
		redirect('Petugasrs/lihatpetugasrs');
	}
}