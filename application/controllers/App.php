<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	// public function index()
	// {

	// 	$this->load->view('welcome_message');
	// }
	public function index()
	{
		$url_proyek = "http://localhost:8080/api/proyek"; // Ganti dengan URL API Anda
		$url_lokasi = "http://localhost:8080/api/lokasi"; // Ganti dengan URL API Anda
		$response_lokasi = callAPI('GET', $url_lokasi);
		$response_proyek = callAPI('GET', $url_proyek);
		// echo '<pre>';
		// print_r($response_proyek);
		// print_r($response_lokasi);
		// print_r(is_array($response_proyek) && is_array($response_lokasi));
		// echo '</pre>';
		if (is_array($response_proyek) && is_array($response_lokasi)) {
			$this->load->view('data_view', [
				'lokasi' => $response_lokasi,
				'proyek' => $response_proyek,
			]);
		} else {
			echo "Error fetching data!";
		}
	}

	// public function tambahLokasi()
	// {
	// 	$this->load->view('welcome_message');
	// }
}
