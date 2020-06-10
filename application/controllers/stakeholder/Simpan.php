<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simpan extends CI_Controller {
/**
 * E-Tourism.|.Layanan-Masayarakat
 * Untuk Masyarakat, Pemerintah dan Stakeholder pengelola
 * @version    1.0.0
 * @author     Muhammad Suryono | https://facebook.com/muhammadsuryono | msuryono0@gmail.com | 0895355698652
 * @copyright  (c) 2020
 * @link       https://yontech.verticalcraneandlift.com
 *
 * PERINGATAN :
 * 1. TIDAK DIPERKENANKAN MENGGUNAKAN INI TANPA SEIZIN DARI PIHAK PENGEMBANG APLIKASI.
 * 2. TIDAK DIPERKENANKAN MEMPERJUALBELIKAN APLIKASI INI TANPA SEIZIN DARI PIHAK PENGEMBANG APLIKASI.
 * 3. TIDAK DIPERKENANKAN MENGHAPUS KODE SUMBER APLIKASI.
 */
	public function __construct() {
		parent::__construct();
		$this->load->model('m_pariwisata');
	}

	public function index()
	{
		$data =(object) [
			'nama_pariwisata' => $this->input->post('nama_pariwisata'),
			'stakeholder' => ucfirst($this->input->post('stakeholder')),
			'nama_pengelola' => ucfirst($this->input->post('nama_pengelola')),
			'lokasi' => ucfirst($this->input->post('lokasi_pariwisata')),
			'sk_pengelola' => $this->input->post('sk_pariwisata')
		];

		if ($this->m_pariwisata->simpan($data)) 
		{
			echo "Sukses";
		}
	}
}
