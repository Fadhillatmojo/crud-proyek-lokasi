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
		// Load the form validation library
		$this->load->library('form_validation');

		// Set validation rules
		$this->form_validation->set_rules('namaProyek', 'Nama Proyek', 'required');
		$this->form_validation->set_rules('client', 'Client', 'required');
		$this->form_validation->set_rules('tglMulai', 'Tanggal Mulai', 'required');
		$this->form_validation->set_rules('tglSelesai', 'Tanggal Selesai', 'required');
		$this->form_validation->set_rules('pimpinanProyek', 'Pimpinan Proyek', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		$this->form_validation->set_rules('lokasiIds[]', 'Lokasi', 'required');

		// If validation fails, reload the form
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('your_form_view'); // Replace with your form view
		} else {
			// Get form data
			$data = array(
				'namaProyek' => $this->input->post('namaProyek'),
				'client' => $this->input->post('client'),
				'tglMulai' => $this->input->post('tglMulai'),
				'tglSelesai' => $this->input->post('tglSelesai'),
				'pimpinanProyek' => $this->input->post('pimpinanProyek'),
				'keterangan' => $this->input->post('keterangan'),
				'lokasiIds' => $this->input->post('lokasiIds') // This should be an array
			);

			// Set the API endpoint
			$url = 'https://your-api-endpoint.com/api/proyek'; // Replace with your API URL

			// Call the API using the callAPI helper function
			$response = callAPI('POST', $url, $data);

			// Check the API response
			if ($response && isset($response['success']) && $response['success'] === true) {
				// Redirect or show success message
				redirect('proyek/success'); // Replace with your success page
			} else {
				// Handle error
				$this->load->view('your_form_view', ['error' => 'Failed to save project. Please try again.']);
			}
		}
	}
}
