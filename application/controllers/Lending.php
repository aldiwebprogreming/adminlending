<?php 

	/**
	 * 
	 */
	class Lending extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
		}

		function index($user){

			$data['utama'] = $this->db->get_where('tbl_utama',['kode_user', $user])->row_array();
			$data['section2'] = $this->db->get_where('tbl_section2', ['kode_user', $user])->row_array();
			$data['section3'] = $this->db->get_where('tbl_section3', ['kode_user', $user])->row_array();
			$data['section4'] = $this->db->get_where('tbl_section4', ['kode_user', $user])->row_array();
			$data['produk'] = $this->db->get('tbl_product')->result_array();
			$this->load->view('lending/index');
		}



	}

 ?>