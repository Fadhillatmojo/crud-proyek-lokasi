<?php
class AppController extends CI_Controller
{
    public function index()
    {
        $url_proyek = "http://localhost:8080/api/proyek"; // Ganti dengan URL API Anda
        $url_lokasi = "http://localhost:8080/api/lokasi"; // Ganti dengan URL API Anda
        $response_proyek = callAPI('GET', $url_proyek);
        $response_lokasi = callAPI('GET', $url_lokasi);

        if ($response_proyek || $response_lokasi) {
            $this->load->view('data_view', ['data' => $response_proyek]);
        } else {
            echo "Error fetching data!";
        }
    }
}
