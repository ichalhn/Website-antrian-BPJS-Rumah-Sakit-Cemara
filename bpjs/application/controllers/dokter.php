<?php
/**
* 
*/
class Dokter extends CI_Controller{
	function __construct(){
	parent::__construct();
	if($this->session->userdata('jabatan')==null){
				redirect('login');
			}
			
}
	public function formdokter(){
		$this->template->load('template','form_dokter');
		# code...
	}
	public function lihatdokter(){
		$data['result']=$this->m_dokter->GetDataDokter();
		$this->template->load('template','view_dokter',$data);
	}
	public function simpan_dokter(){
		$config = array(
				array(
				'field' => 'ID_DokKlinik',
				'label' => 'ID Dokter',
				'rules' => 'required|alpha_numeric|is_unique[dokter_klinik.ID_DokKlinik]',
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
					'field' => 'Nama_DokKlinik',
					'label' => 'Nama Dokter Klinik',
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
			$this->template->load('template','form_dokter');
		}
		else {
			$data = array(
				'ID_DokKlinik' => $_POST['ID_DokKlinik'],
				'UserID' => $_POST['UserID'],
				'Nama_DokKlinik' => $_POST['Nama_DokKlinik'],
				'Umur' => $_POST['Umur'],
				'Alamat' => $_POST['Alamat'],
				'Gender' => $_POST['Gender']
			);
			
			$this->db->insert('dokter_klinik',$data);
			
			redirect('Dokter/lihatdokter');
		}
	}
		function alpha_dash_space($str){
			return (! preg_match('/^([a-zA-Z\s])+$/', $str))? FALSE : TRUE;
	}
	public function update(){
		# code...
		$config = array(
			array(
				'field' => 'ID_DokKlinik',
				'label' => 'ID Dokter',
				'rules' => 'required|alpha_numeric',
				'errors' => array(
					'required' => '%s tidak boleh kosong',
					'alpha_numeric'=> '%s Hanya Boleh Huruf A - Z dan Angka 0 - 9'
					)
					
				),
				array(
					'field' => 'UserID',
					'label' => 'User ID',
					'rules' => 'required',
					'errors' => array(
						'required' => '%s tidak boleh kosong')
				),
				array(
					'field' => 'Nama_DokKlinik',
					'label' => 'Nama Dokter Klinik',
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
			$this->template->load('template','update_dokter');
		}
		else {
			if (isset($_POST['btn'])){
				$id = $this->uri->segment(3);
				$data = array(
				'ID_DokKlinik' => $_POST['ID_DokKlinik'],
				'UserID' => $_POST['UserID'],
				'Nama_DokKlinik' => $_POST['Nama_DokKlinik'],
				'Umur' => $_POST['Umur'],
				'Alamat' => $_POST['Alamat'],
				'Gender' => $_POST['Gender']
				);
	
				$this->db->where('ID_DokKlinik',$id);
				$this->db->update('dokter_klinik',$data);
				redirect('Dokter/lihatdokter');
			}
			else{
				$id=$this->uri->segment(3);
				$data = array('ID_DokKlinik' => $id);
				$this->template->load('template','update_dokter',$data);
			}
		}
	}
	public function hapus(){
		# code...
		$id = $this->uri->segment(3);
		$this->m_dokter->hapusdokter($id);
		redirect('Dokter/lihatdokter');
	}
}