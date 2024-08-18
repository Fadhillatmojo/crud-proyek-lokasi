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
		// Fetch data lokasi berdasarkan ID
		$url_lokasi = "http://localhost:8080/api/lokasi";
		$response_lokasi = callAPI('GET', $url_lokasi);
		// echo '<pre>';
		// print_r($response_lokasi);
		// print_r($response_lokasi);
		// print_r($response_lokasi);
		// // print_r(is_array($response_lokasi));
		// print_r($response_lokasi[0]['namaLokasi']);
		// echo '</pre>';

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
}
