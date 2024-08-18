<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proyek extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function tambahProyek()
	{
		// Memuat view untuk form tambah proyek
		$url_lokasi = "http://localhost:8080/api/lokasi";
		$response_lokasi = callAPI('GET', $url_lokasi);

		// Load form tambah proyek dengan data lokasi yang diambil
		$this->load->view('tambah_proyek_form', ['lokasi' => $response_lokasi]);
	}

	public function post()
	{
		// Mengambil data dari form
		$dataProyek = [
			'namaProyek' => $this->input->post('namaProyek'),
			'client' => $this->input->post('client'),
			'tglMulai' => $this->input->post('tglMulai'),
			'tglSelesai' => $this->input->post('tglSelesai'),
			'pimpinanProyek' => $this->input->post('pimpinanProyek'),
			'keterangan' => $this->input->post('keterangan'),
			'lokasiIds' => $this->input->post('lokasiIds') // Ambil data lokasiIds sebagai array
		];

		// Mengirimkan data ke API
		$response = callAPI('POST', 'http://localhost:8080/api/proyek', $dataProyek);

		// Tampilkan hasil
		redirect('App/');
	}

	public function edit($id)
	{
		// Fetch data proyek berdasarkan ID
		$url_lokasi = "http://localhost:8080/api/lokasi";
		$lokasi = callAPI('GET', $url_lokasi);
		$url = 'http://localhost:8080/api/findProyekById?id=' . $id;
		$proyek = callAPI('GET', $url);

		// Load form edit dengan data proyek yang diambil
		$this->load->view('edit_proyek_form', ['proyek' => $proyek, 'lokasi' => $lokasi]);
	}

	public function update($id)
	{
		// Mengambil data dari form
		$dataProyek = [
			'namaProyek' => $this->input->post('namaProyek'),
			'client' => $this->input->post('client'),
			'tglMulai' => $this->input->post('tglMulai'),
			'tglSelesai' => $this->input->post('tglSelesai'),
			'pimpinanProyek' => $this->input->post('pimpinanProyek'),
			'keterangan' => $this->input->post('keterangan'),
			'lokasiIds' => $this->input->post('lokasiIds') // Ambil data lokasiIds sebagai array
		];

		// URL dengan ID lokasi
		$url = 'http://localhost:8080/api/proyek?id=' . $id;

		// Mengirimkan data ke API untuk update
		$response = callAPI('PUT', $url, $dataProyek);

		// Redirect ke halaman utama
		redirect('App/');
	}

	public function delete($id)
	{
		// URL dengan ID proyek untuk dihapus
		$url = 'http://localhost:8080/api/proyek?id=' . $id;

		// Mengirimkan permintaan DELETE ke API
		$response = callAPI('DELETE', $url);

		// Redirect ke halaman utama
		redirect('App/');
	}
}
