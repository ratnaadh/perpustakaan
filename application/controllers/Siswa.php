<?php 


/**
 * kelas kontrol siswa
 */
class Siswa extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('Siswa_model');

		if ($this->session->userdata('level') != 'admin') {
			redirect(site_url('login'));
		}
	}

	function index()
	{
		$data['GetSiswa'] = $this->Siswa_model->GetData('siswa');

		$this->load->view('v_siswa', $data);
	}

	function AddSiswa()
	{
		$add['id_Siswa'] = '';
		$add['nisn'] = $this->input->post('txt_nisn');
		$add['nis'] = $this->input->post('txt_nis');
		$add['nama'] = $this->input->post('txt_nama');
		$add['kelas'] = $this->input->post('txt_kelas');
		$this->Siswa_model->AddData('siswa', $add);
		redirect(site_url('siswa'));
	}

	function Add()
	{
		$this->load->view('v_post_siswa');
	}

	function Coba()
	{
		$this->load->view('navbar');
	}


	function DeleteSiswa()
	{
		$id_siswa = $this->uri->segment('3');
		$this->Siswa_model->DeleteData('siswa', 'id_siswa', $id_siswa);
		redirect(site_url('siswa'));
	}

	function EditSiswa()
	{
		$id_siswa = $this->input->post('txt_id_siswa');
		$update['nisn'] = $this->input->post('txt_nisn');
		$update['nis'] = $this->input->post('txt_nis');
		$update['nama'] = $this->input->post('txt_nama');
		$update['kelas'] = $this->input->post('txt_kelas');
		$this->Siswa_model->UpdateData('siswa', 'id_siswa', $id_siswa, $update);
		redirect(site_url('siswa'));
	}

	function Detail()
	{
		if ($this->uri->segment(4) == 'view') {
			$id_siswa = $this->uri->segment(3);
			$tampil = $this->Siswa_model->GetDataWhere('siswa', 'id_siswa', $id_siswa)->row();
			$data['detail']['nisn'] = $tampil->nisn;
			$data['detail']['nis'] = $tampil->nis;
			$data['detail']['nama'] = $tampil->nama;
			$data['detail']['kelas'] = $tampil->kelas;
			$data['detail']['id_siswa'] = $tampil->id_siswa;
			$this->load->view('v_put_siswa', $data);
		}
	}
}


 ?>