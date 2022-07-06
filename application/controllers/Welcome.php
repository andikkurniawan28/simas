<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ronsel_masakan_model');
		if($this->session->userdata('username') != 'pabrikasi' && $this->session->userdata('status') != 'login')
		redirect(base_url('auth'));
	}

	public function index()
	{
		$data['tabel'] = $this->Ronsel_masakan_model->tampilkan_data_tabel();
		$this->load->view('static/header');
		$this->load->view('welcome_message', $data);
		$this->load->view('static/footer');
	}

	public function buat_ronsel()
	{
		$jenis		= $this->input->post('jenis', TRUE);
		$pan		= $this->input->post('pan', TRUE);
		$palung		= $this->input->post('palung', TRUE);
		$volume		= $this->input->post('volume', TRUE);
		$masak		= $this->input->post('masak', TRUE);
		$turun		= $this->input->post('turun', TRUE);
		$tukang		= strtolower($this->input->post('tukang', TRUE));

		$kode		= $this->Ronsel_masakan_model->tentukan_kode_masakan($jenis);
		$id_sampel	= $this->Ronsel_masakan_model->cek_kode_terakhir($kode);
		$this->Ronsel_masakan_model->insert_ronsel($id_sampel, $jenis, $pan, $palung, $volume, $masak, $turun, $tukang);
		$this->session->set_flashdata('success', "<div class='alert alert-success' role='alert'>Data berhasil ditambahkan</div>");
		redirect(base_url());
	}

	public function delete_ronsel($id)
	{
		$this->Ronsel_masakan_model->delete_ronsel($id);
		$this->session->set_flashdata('success', "<div class='alert alert-success' role='alert'>Data berhasil dihapus</div>");
		redirect(base_url());
	}

	public function cetak_ronsel($id)
	{
		$data['data_ronsel'] = $this->Ronsel_masakan_model->cetak_data_ronsel($id);
		$this->load->view('cetak_ronsel/cetak_ronsel', $data);
	}
}
