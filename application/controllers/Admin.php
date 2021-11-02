<?php 

	/**
	 * 
	 */
	class Admin extends CI_Controller
	{
		
		function __construct()
		{
				parent:: __construct();
				if ($this->session->username == null) {
					redirect('login/');
				}
		}


		function index(){

			$this->load->view('template_admin/header');
			$this->load->view('admin/index');
			$this->load->view('template_admin/footer');

		}


		function utama(){

			$data['utama'] = $this->db->get('tbl_utama')->result_array();

			$this->load->view('template_admin/header');
			$this->load->view('admin/utama', $data);
			$this->load->view('template_admin/footer');


	}

	function act_utama(){

			$kirim = $this->input->post('kirim');

			if ($kirim) {


			$config['upload_path']          = './upload/';
			$config['allowed_types']        = 'jpg|png|jpeg';
			

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('images')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', 'swal("Gagal!", "Upload gambar gagal", "warning" );');
		 		redirect('admin/utama');

		 	}else{

		 		$images = $_FILES['images']['name'];
		 		$kode_user = $this->session->kode_user;

				$data = [
					'kode_user' => $kode_user,
					'title' => $this->input->post('title'),
					'images' => $images,
					'link_button' => $this->input->post('link_button'),
					'color' => $this->input->post('color'),
					'title_button' => $this->input->post('title_button'),

				];

				$this->db->insert('tbl_utama', $data);
				$this->session->set_flashdata('message', 'swal("Sukses!", "Datar berhasil dipost", "success");');
				redirect('admin/utama');

			}

		}

	}


	function produk(){

			$data['produk'] = $this->db->get('tbl_product')->result_array();

		    $this->load->view('template_admin/header');
			$this->load->view('admin/produk', $data);
			$this->load->view('template_admin/footer');

			$kirim = $this->input->post('kirim');

		if ($kirim) {

			$config['upload_path']          = './upload/';
			$config['allowed_types']        = 'jpg|png|jpeg';
			

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('images')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', 'swal("Gagal!", "Upload gambar gagal", "warning" );');
		 		redirect('admin/produk');

		 	}else{


				$kode_user = $this->session->kode_user;
				$data = [
					'kode_user' => $kode_user,
					'title_product' => $this->input->post('title_product'),
					'harga_awal' => $this->input->post('harga_awal'),
					'harga_diskon' => $this->input->post('harga_diskon'),
					'images' => $images = $_FILES['images']['name'],

				];

				$this->db->insert('tbl_product', $data);
				$this->session->set_flashdata('message', 'swal("Sukses!", "Datar berhasil dipost", "success");');
				redirect('admin/produk');


			}
		}


	}

	function hapus_produk(){

		$id =  $this->input->post('id');

		$this->db->where('id', $id);
		$this->db->delete('tbl_product');
		$this->session->set_flashdata('message', 'swal("Sukses!", "Datar berhasil dihapus", "success");');
		redirect('admin/produk');

	}


	function edit_product(){

			$id = $this->input->get('id');
			$data['produk'] = $this->db->get_where('tbl_product',['id' => $id])->row_array();

			$this->load->view('template_admin/header');
			$this->load->view('admin/edit_produk', $data);
			$this->load->view('template_admin/footer');

	}


	function act_edit(){

		$id = $this->input->post('id');

		if ($this->input->post('images') == null) {
			

			$config['upload_path']          = './upload/';
			$config['allowed_types']        = 'jpg|png|jpeg';
			

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('images')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', 'swal("Gagal!", "Upload gambar gagal", "warning" );');
		 		redirect('admin/produk');

		 	}else{



				$kode_user = $this->session->kode_user;
				
				$data = [
					'kode_user' => $kode_user,
					'title_product' => $this->input->post('title_product'),
					'harga_awal' => $this->input->post('harga_awal'),
					'harga_diskon' => $this->input->post('harga_diskon'),
					'images' => $images = $_FILES['images']['name'],
				];

				$this->db->where('id',$id);
				$this->db->update('tbl_product', $data);
				$this->session->set_flashdata('message', 'swal("Sukses!", "Datar berhasil dipost", "success");');
				redirect('admin/produk');

			}

		}else{

		$data = [
			'title_product' => $this->input->post('title_product'),
			'images' => $this->input->post('images'),
			'harga_awal' => $this->input->post('harga_awal'),
			'harga_diskon' => $this->input->post('harga_diskon'),
		];

			$this->db->where('id',$id);
			$this->db->update('tbl_product', $data);
			$this->session->set_flashdata('message', 'swal("Sukses!", "Datar berhasil diedit", "success");');
			redirect('admin/produk');
		}

	}

	function section2(){

		$data['section2'] = $this->db->get('tbl_section2')->result_array();

		$this->load->view('template_admin/header');
		$this->load->view('admin/section2', $data);
		$this->load->view('template_admin/footer');
	}


	function act_section2(){

			$kirim = $this->input->post('kirim');

			if ($kirim) {


			$config['upload_path']          = './upload/';
			$config['allowed_types']        = 'jpg|png|jpeg';
			

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('images')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', 'swal("Gagal!", "Upload gambar gagal", "warning" );');
		 		redirect('admin/section2');

		 	}else{

		 		$images = $_FILES['images']['name'];

				$data = [
					'kode_user' => $this->session->kode_user,
					'title' => $this->input->post('title'),
					'images' => $images,
					'link_button' => $this->input->post('link_button'),
					'color' => $this->input->post('color'),
					'title_button' => $this->input->post('title_button'),

				];

				$this->db->insert('tbl_section2', $data);
				$this->session->set_flashdata('message', 'swal("Sukses!", "Datar berhasil dipost", "success");');
				redirect('admin/section2');

			}

		}

	}


	function edit_section2(){

			$gambar = $this->input->post('images');

			echo $this->input->post('title');

			if ($gambar == null) {

				$id = $this->input->post('id');
				
				$data = [
					'title' => $this->input->post('title'),
					'link_button' => $this->input->post('link_button'),
					'color' => $this->input->post('color'),
					'title_button' => $this->input->post('title_button'),
				];

				$this->db->where('id', $id);
				$this->db->update('tbl_section2', $data);
				$this->session->set_flashdata('message', 'swal("Sukses!", "Edit data berhasil diedit", "success" );');
		 		redirect('admin/section2');


			}else{


			$config['upload_path']          = './upload/';
			$config['allowed_types']        = 'jpg|png|jpeg';
			

			$this->load->library('upload', $config);
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('images')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', 'swal("Gagal!", "Upload gambar gagal", "warning" );');
		 		redirect('admin/section3');

		 	}else{

		 		$images = $_FILES['images']['name'];

				$data = [
					'title' => $this->input->post('title'),
					'images'=> $_FILES['images']['name'],
					'link_button' => $this->input->post('link_button'),
					'color' => $this->input->post('color'),
					'title_button' => $this->input->post('title_button'),
				];

				$this->db->where('id', $id);
				$this->db->update('tbl_section2', $data);
				$this->session->set_flashdata('message', 'swal("Sukses!", "Edit data berhasil diedit", "success" );');
		 		redirect('admin/section2');

		 	}


			}
	}


	function section3 (){

		$data['section3'] = $this->db->get('tbl_section3')->result_array();

		$this->load->view('template_admin/header');
		$this->load->view('admin/section3', $data);
		$this->load->view('template_admin/footer');

	}

	function act_section3(){

			$kirim = $this->input->post('kirim');

			if ($kirim) {


			$config['upload_path']          = './upload/';
			$config['allowed_types']        = 'jpg|png|jpeg';
			

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('images')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', 'swal("Gagal!", "Upload gambar gagal", "warning" );');
		 		redirect('admin/section3');

		 	}else{

		 		$images = $_FILES['images']['name'];

				$data = [
					'kode_user' => $this->session->kode_user,
					'title' => $this->input->post('title'),
					'images' => $images,

				];

				$this->db->insert('tbl_section3', $data);
				$this->session->set_flashdata('message', 'swal("Sukses!", "Datar berhasil dipost", "success");');
				redirect('admin/section3');

			}

		}

	}


	function section4(){

		$data['section4'] = $this->db->get('tbl_section4')->result_array();
		$this->load->view('template_admin/header');
		$this->load->view('admin/section4', $data);
		$this->load->view('template_admin/footer');


	}

		function act_section4(){

			$kirim = $this->input->post('kirim');

			if ($kirim) {


			$config['upload_path']          = './upload/';
			$config['allowed_types']        = 'jpg|png|jpeg';
			

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('images')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', 'swal("Gagal!", "Upload gambar gagal", "warning" );');
		 		redirect('admin/section4');

		 	}else{

		 		$images = $_FILES['images']['name'];

				$data = [

					'kode_user' => $this->session->kode_user,
					'title' => $this->input->post('title'),
					'images' => $images,
					'link_button' => $this->input->post('link_button'),
					'color' => $this->input->post('color'),
					'title_button' => $this->input->post('title_button'),

				];

				$this->db->insert('tbl_section4', $data);
				$this->session->set_flashdata('message', 'swal("Sukses!", "Datar berhasil dipost", "success");');
				redirect('admin/section4');

			}

		}

	}



function admin(){

		$data['admin'] = $this->db->get('tbl_admin')->result_array();
		$this->load->view('template_admin/header');
		$this->load->view('admin/admin', $data);
		$this->load->view('template_admin/footer');

	$kirim = $this->input->post('kirim');

	if ($kirim) {

		$kode = rand(1, 100000);
		$kode_user = "user-".$kode;
		
		$data = [
			'kode_user' => $kode_user,
			'username' => $this->input->post('username'),
			'pass' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT),
			'rule'  => $this->input->post('rule'),
		];


		$this->db->insert('tbl_admin', $data);
		$this->session->set_flashdata('message', 'swal("Sukses!", "Admin berhasil ditambahkan", "success");');
		redirect('admin/admin');

	}


}





}


 ?>