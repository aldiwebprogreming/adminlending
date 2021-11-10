<?php 

	/**
	 * 
	 */
	class Page extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
		}

		function index($user){


			$data['utama'] = $this->db->get_where('tbl_utama',['kode_user' => $user])->row_array();
			$data['section2'] = $this->db->get_where('tbl_section2', ['kode_user' => $user])->result_array();
			$data['section3'] = $this->db->get_where('tbl_section3', ['kode_user' => $user])->result_array();
			$data['section4'] = $this->db->get_where('tbl_section4', ['kode_user' =>  $user])->row_array();
			$data['produk'] = $this->db->get_where('tbl_product',['kode_user' => $user])->result_array();
			$data['produk_salle'] = $this->db->get_where('tbl_product_salle',['kode_user' => $user])->result_array();

			if ($data['utama'] == null || $data['section4'] == null  || $data['section2'] == null || $data['section3'] == null) {
				
				$this->load->view('lending/not');
			}else{
			$this->load->view('lending/index', $data);
			}
		}



	}

 ?>