<?php 

/**
 * 
 */
class Peminjaman extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('Peminjaman_model');
		if ($this->session->userdata('level') != 'admin') {
			redirect(site_url('login'));
		}

		
	}

	function index()
	{
		$data['GetPeminjaman'] = $this->Peminjaman_model->GetAll();
		

		$this->load->view('v_peminjaman', $data);
	}

	function AddPeminjaman()
	{
		$add['id_peminjaman'] = '';
		$add['id_buku'] = $this->input->post('txt_id_buku');
		$add['id_siswa'] = $this->input->post('txt_id_siswa');
		$add['tanggal_pinjam'] = $this->input->post('txt_tanggal_pinjam');
		$add['tanggal_pengembalian'] = $this->input->post('txt_tanggal_pengembalian');
		$this->Peminjaman_model->AddData('peminjaman', $add);
		redirect(site_url('peminjaman'));
	}

	function Add()
	{
		$data['GetBuku'] = $this->Peminjaman_model->GetData('buku');
		$data['GetSiswa'] = $this->Peminjaman_model->GetData('siswa');

		$this->load->view('v_post_peminjaman', $data);
	}

	function DeletePeminjaman()
	{
		$id_peminjaman = $this->uri->segment('3');
		$this->Peminjaman_model->DeleteData('peminjaman', 'id_peminjaman', $id_peminjaman);
		redirect(site_url('peminjaman'));
	}

	function EditPeminjaman()
	{
		$id_peminjaman = $this->input->post('id_peminjaman');
		$update['id_buku'] = $this->input->post('txt_id_buku');
		$update['id_siswa'] = $this->input->post('txt_id_siswa');
		$update['tanggal_pinjam'] = $this->input->post('txt_tanggal_pinjam');
		$update['tanggal_pengembalian'] = $this->input->post('txt_tanggal_pengembalian');
		$this->Peminjaman_model->UpdateData('peminjaman', 'id_peminjaman', $id_peminjaman, $update);
		redirect(site_url('peminjaman'));
	}

	function Detail()
	{
		if ($this->uri->segment(4) == 'view') {
				$data['GetBuku'] = $this->Peminjaman_model->GetData('buku');
				$data['GetSiswa'] = $this->Peminjaman_model->GetData('siswa');

				$id_peminjaman = $this->uri->segment(3);
				$onjoin = "peminjaman.id_buku = buku.id_buku and peminjaman.id_siswa = siswa.id_siswa";
				$tampil = $this->Peminjaman_model->GetDataJoinWhere('peminjaman', 'buku', 'siswa', $onjoin, 'id_peminjaman', $id_peminjaman)->row();
				$data['detail']['nama'] = $tampil->nama;
				$data['detail']['id_siswa'] = $tampil->id_siswa;
				$data['detail']['judul'] = $tampil->judul;
				$data['detail']['id_buku'] = $tampil->id_buku;
				$data['detail']['tanggal_pinjam'] = $tampil->tanggal_pinjam;
				$data['detail']['tanggal_pengembalian'] = $tampil->tanggal_pengembalian;
				$data['detail']['id_peminjaman'] = $tampil->id_peminjaman;
				$this->load->view('v_put_peminjaman', $data);

			}



	}

	



}

	

 ?>