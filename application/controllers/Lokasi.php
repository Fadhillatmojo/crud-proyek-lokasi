<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lokasi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function tambahLokasi()
	{
		// Memuat view untuk form tambah Lokasi
		$this->load->view('tambah_lokasi_form');
	}

	public function simpanLokasi()
	{
		// Mengambil data dari form
		$dataLokasi = [
			'namaLokasi' => $this->input->post('namaLokasi'),
			'negara' => $this->input->post('negara'),
			'kota' => $this->input->post('kota'),
			'provinsi' => $this->input->post('provinsi')
		];

		// Mengirimkan data ke API
		$response = callAPI('POST', 'http://localhost:8080/api/lokasi', $dataLokasi);

		// Redirect ke form lagi
		redirect('App/');
	}

	public function edit($id)
	{
		// Fetch data lokasi berdasarkan ID
		$url = 'http://localhost:8080/api/findLokasiById?id=' . $id;
		$lokasi = callAPI('GET', $url);

		// Load form edit dengan data lokasi yang diambil
		$this->load->view('edit_lokasi_form', ['lokasi' => $lokasi]);
	}

	public function update($id)
	{
		// Mengambil data dari form
		$dataLokasi = [
			'namaLokasi' => $this->input->post('namaLokasi'),
			'negara' => $this->input->post('negara'),
			'kota' => $this->input->post('kota'),
			'provinsi' => $this->input->post('provinsi')
		];

		// URL dengan ID lokasi
		$url = 'http://localhost:8080/api/lokasi?id=' . $id;

		// Mengirimkan data ke API untuk update
		$response = callAPI('PUT', $url, $dataLokasi);

		// Redirect ke halaman utama
		redirect('App/');
	}

	public function delete($id)
	{
		// URL dengan ID lokasi untuk dihapus
		$url = 'http://localhost:8080/api/lokasi?id=' . $id;

		// Mengirimkan permintaan DELETE ke API
		$response = callAPI('DELETE', $url);

		// Redirect ke halaman utama
		redirect('App/');
	}
}
