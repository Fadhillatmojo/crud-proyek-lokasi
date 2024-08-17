<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proyek extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// Load model jika perlu
	}

	//     public function index() {
	//         // Endpoint API
	//         $api_url = "http://localhost:8080/api/proyek";

	//         // Menggunakan cURL untuk melakukan request ke API
	//         $curl = curl_init();
	//         curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	//         curl_setopt($curl, CURLOPT_URL, $api_url);
	//         $response = curl_exec($curl);
	//         curl_close($curl);

	//         // Mengubah response JSON menjadi array asosiatif
	//         $data['proyek'] = json_decode($response, true);

	//         // Memuat view dan mengirimkan data
	//         $this->load->view('proyek_view', $data);
	//     }

	public function tambahProyek()
	{
		// Memuat view untuk form tambah proyek
		$this->load->view('tambah_proyek_form');
	}

	public function simpanProyek()
	{
		// Ambil data dari form
		$data = array(
			'namaProyek' => $this->input->post('namaProyek'),
			'client' => $this->input->post('client'),
			'tglMulai' => $this->input->post('tglMulai'),
			'tglSelesai' => $this->input->post('tglSelesai'),
			'pimpinanProyek' => $this->input->post('pimpinanProyek'),
			'keterangan' => $this->input->post('keterangan'),
		);

		// URL API untuk menyimpan proyek
		$api_url = "http://localhost:8080/api/proyek";

		// Menggunakan cURL untuk mengirim data ke API
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $api_url);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($curl);
		curl_close($curl);

		// Redirect kembali ke halaman daftar proyek
		redirect('proyek');
	}
}
