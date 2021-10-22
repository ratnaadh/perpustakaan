<?php 


/**
 * kelas kontrol buku
 */
class Buku extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('Buku_model');

		if ($this->session->userdata('level') != 'admin') {
			redirect(site_url('login'));
		}
	}

	function index()
	{
		$data['GetBuku'] = $this->Buku_model->GetData('buku');

		$this->load->view('v_buku', $data);
	}

	function AddBuku()
	{
		$add['id_buku'] = '';
		$add['isbn'] = $this->input->post('txt_isbn');
		$add['judul'] = $this->input->post('txt_judul');
		$add['penulis'] = $this->input->post('txt_penulis');
		$this->Buku_model->AddData('buku', $add);
		redirect(site_url('buku'));
	}

	function Add()
	{
		$this->load->view('v_post_buku');
	}

	function DeleteBuku()
	{
		$id_buku = $this->uri->segment('3');
		$this->Buku_model->DeleteData('buku', 'id_buku', $id_buku);
		redirect(site_url('buku'));
	}

	function EditBuku()
	{
		$id_buku = $this->input->post('txt_id_buku');
		$update['isbn'] = $this->input->post('txt_isbn');
		$update['judul'] = $this->input->post('txt_judul');
		$update['penulis'] = $this->input->post('txt_penulis');
		$this->Buku_model->UpdateData('buku', 'id_buku', $id_buku, $update);
		redirect(site_url('buku'));
	}

	function Detail()
	{
		if ($this->uri->segment(4) == 'view') {
			$id_buku = $this->uri->segment(3);
			$tampil = $this->Buku_model->GetDataWhere('buku', 'id_buku', $id_buku)->row();
			$data['detail']['isbn'] = $tampil->isbn;
			$data['detail']['judul'] = $tampil->judul;
			$data['detail']['penulis'] = $tampil->penulis;
			$data['detail']['id_buku'] = $tampil->id_buku;
			$this->load->view('v_put_buku', $data);
		}
	}
}


 ?>