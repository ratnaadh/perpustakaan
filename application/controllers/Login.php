<?php 

/**
 * kelas kontrol login
 */
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('Login_model');

	}

	function index()
	{
		if ($this->session->userdata('level') != 'admin') {
			$this->load->view('v_login');
		}else{
			redirect(site_url('buku'));
		}
	}


	function auth()
	{
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);

		$cek_user = $this->Login_model->cek_user($username, $password);

		if ($cek_user->num_rows() > 0) {
			$data = $cek_user->row_array();
			$username = $data['username'];
			$level = $data['level'];
			$sesdata = array(
				'username' => $username,
				'level' => $level,
				'logged_in' => true
			);

			if ($level == 'admin') {
				$this->session->set_userdata($sesdata);
				redirect('peminjaman');
			}
		}else{
			redirect(site_url(''));
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		$url = base_url('');
		redirect($url);
	}
}

 ?>