<?php 

	/**
	 * 
	 */
	class Login extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('session');
		}


		function index(){

			$this->load->view('login/index.php');

		}

		function act_login(){

			$username = $this->input->post('username');
			$pass = $this->input->post('pass');

			$cekuser = $this->db->get_where('tbl_admin', ['username' => $username])->row_array();

			if ($cekuser == true) {

			

				if (password_verify($pass, $cekuser['pass'])) {

					$data = [
						'username' => $cekuser['username'],
				 		'rule' => $cekuser['rule'],
				 		'kode_user' => $cekuser['kode_user'],
				 	];

					$this->session->set_userdata($data);
					redirect('admin/');

				}else{
						
					$this->session->set_flashdata('message', 'swal("Gagal!", "Password anda salah", "warning" );');
		 			redirect('login/');
				}
				
				
			}else{

				$this->session->set_flashdata('message', 'swal("Gagal!", "Akun anda tidak terdaftar", "error" );');
		 		redirect('login/');
			}

		}


		function logout(){


				$this->session->unset_userdata('username');
				$this->session->unset_userdata('rule');
				$this->session->set_flashdata('message', 'swal("Sukses!", "Anda Berhasil Keluar", "success");');
					redirect('login/');
		}
	}

 ?>