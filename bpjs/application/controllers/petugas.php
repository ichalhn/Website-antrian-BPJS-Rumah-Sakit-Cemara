<?php
/**
* 
*/
class Petugas extends CI_Controller{
	function __construct(){
	parent::__construct();
	if($this->session->userdata('jabatan')==null){
				redirect('login');
			}
			
}
	public function formpetugas(){
		$this->template->load('template','form_petugas');
		# code...
	}
	public function lihatpetugas(){
		$data['result']=$this->m_petugas->GetDataPetugas();
		$this->template->load('template','view_petugas',$data);
	}
	public function simpan_petugas(){
		$config = array(
				array(
				'field' => 'ID_PetKlinik',
				'label' => 'ID Petugas Klinik',
				'rules' => 'required|alpha_numeric|is_unique[petugas_klinik.ID_PetKlinik]',
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
					'field' => 'Nama_PetKlinik',
					'label' => 'Nama Petugas Klinik',
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
			$this->template->load('template','form_petugas');
		}
		else {
			$data = array(
				'ID_PetKlinik' => $_POST['ID_PetKlinik'],
				'UserID' => $_POST['UserID'],
				'Nama_PetKlinik' => $_POST['Nama_PetKlinik'],
				'Umur' => $_POST['Umur'],
				'Alamat' => $_POST['Alamat'],
				'Gender' => $_POST['Gender']
			);
			
			$this->db->insert('petugas_klinik',$data);
			
			redirect('Petugas/lihatpetugas');
		}
	}
		function alpha_dash_space($str){
			return (! preg_match('/^([a-zA-Z\s])+$/', $str))? FALSE : TRUE;
	}
	public function update(){
		# code...
		$config = array(
			array(
				'field' => 'ID_PetKlinik',
				'label' => 'ID Petugas Klinik',
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
					'field' => 'Nama_PetKlinik',
					'label' => 'Nama Petugas Klinik',
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
			$this->template->load('template','update_petugas');
		}
		else {
			if (isset($_POST['btn'])){
				$id = $this->uri->segment(3);
				$data = array(
				'ID_PetKlinik' => $_POST['ID_PetKlinik'],
				'UserID' => $_POST['UserID'],
				'Nama_PetKlinik' => $_POST['Nama_PetKlinik'],
				'Umur' => $_POST['Umur'],
				'Alamat' => $_POST['Alamat'],
				'Gender' => $_POST['Gender']
				);
	
				$this->db->where('ID_PetKlinik',$id);
				$this->db->update('petugas_klinik',$data);
				redirect('Petugas/lihatpetugas');
			}
			else{
				$id=$this->uri->segment(3);
				$data = array('ID_PetKlinik' => $id);
				$this->template->load('template','update_petugas',$data);
			}
		}
	}
	public function hapus(){
		# code...
		$id = $this->uri->segment(3);
		$this->m_petugas->hapuspetugas($id);
		redirect('Petugas/lihatpetugas');
	}
}