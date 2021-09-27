<?php
	class login extends CI_Controller
	{
		function index()
		{	
			if($this->session->userdata('jabatan')!=null){
				if($this->session->userdata('jabatan') == "Dokter")
				{
					redirect('surat/lihatsurat');
				}elseif ($this->session->userdata('jabatan') == "Petugas Klinik") 
				{
					redirect('surat/lihatsurat');
				}elseif ($this->session->userdata('jabatan') == "Petugas RS") 
				{
					redirect('petugasrs/lihatpetugasrs');
			}elseif ($this->session->userdata('jabatan') == "Pasien")
			{
					redirect('media/view_page');
			}
			}
			else{
				$data['error'] = null;
				$this->load->view('template_login', $data);
			}
			
		}

		function cek_login()
		{
			if($this->session->userdata('jabatan')!=null){
				if($this->session->userdata('jabatan') == "Dokter")
				{
					redirect('surat/lihatsurat');
				}elseif ($this->session->userdata('jabatan') == "Petugas Klinik") 
				{
					redirect('surat/lihatsurat');
				}elseif ($this->session->userdata('jabatan') == "Petugas RS") 
				{
					redirect('petugasrs/lihatpetugasrs');
			}elseif ($this->session->userdata('jabatan') == "Pasien") 
			{
					redirect('media/view_page');
			}
			}
			else{
				$query = $this->m_login->cek($_POST['username'],$_POST['password']);
			//var_dump($query->num_rows());
			if($query->num_rows()<>0)
			{
				$data_session = array('status'=>"login");
				foreach($query->result_array() as $data)
				{
					$sess_data['username'] = $data['username'];
					$sess_data['password'] = $data['password'];
					$sess_data['jabatan']    = $data['jabatan'];
					$this->session->set_userdata($sess_data);
				}
				$this->session->set_userdata($data_session);
				$jabatan = $this->session->userdata('jabatan');
				if($jabatan == "Dokter")
				{
					redirect('surat/lihatsurat');
				}elseif ($jabatan == "Petugas Klinik") 
				{
					redirect('surat/lihatsurat');
				}elseif ($jabatan == "Petugas RS") 
				{
					redirect('petugasrs/lihatpetugasrs');
			}elseif ($jabatan == "Pasien") 
			redirect('media/view_page');
			}
			
			else
			{
				$data['error'] = 'Username & Password yang anda masukkan tidak sesuai';
				$this->load->view('template_login', $data);
			}
			}
			
		}
		
		function home()
		{
			$config = array(
            array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required',
                'errors' => array(
                    'required' => '%s tidak boleh kosong'
				)
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                    'required' => '%s tidak boleh kosong'
                )
            ),
            array(
                'field' => 'confirm_password',
                'label' => 'Konfirmasi Password',
                'rules' => 'required|matches[password]',
                'errors' => array(
                    'required' => '%s tidak boleh kosong',
                    'matches'=>'%s tidak sama'
                )
            ),
            array(
                'field' => 'jabatan',
                'label' => 'Jabatan',
                'rules' => 'required',
                'errors' => array(
                    'required' => '%s tidak boleh kosong'
                )
            )
        );
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><li>', '</li></div>');
        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE){
        	$this->session->set_flashdata('pesan_login','<div class="alert alert-danger">
					<p>Gagal Register!</p></div>');
            $this->template->load('template','template_login');
        }else{
        	$username  = $this->input->post('username');
        	$password  = $this->input->post('password');
        	$pass2  = $this->input->post('confirm_password');
        	$jabatan = $this->input->post('jabatan');
        	$data = array('username'=>$username, 
							  'password'=>$password,
							  'jabatan'=>$jabatan,
							  );
				
            $this->db->insert('akun', $data);
            redirect('login');
        }
		}
	}
	

?>