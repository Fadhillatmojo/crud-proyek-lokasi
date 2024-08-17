<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
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
		$response_proyek = callAPI('GET', $url_proyek);
		$response_lokasi = callAPI('GET', $url_lokasi);

		if ($response_proyek || $response_lokasi) {
			$this->load->view('data_view', [
				'proyek' => $response_proyek,
				'lokasi' => $response_lokasi
			]);
		} else {
			echo "Error fetching data!";
		}
	}
}
