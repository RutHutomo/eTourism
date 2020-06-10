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
		$this->load->model('m_complaint');
	}

	public function index()
	{
		$id = $this->input->post('id');
		$data =(object) [
			'fullname' => $this->input->post('fullname'),
			'email' => $this->input->post('email'),
			'subject' => ucfirst($this->input->post('subject')),
			'isi_complaint' => $this->input->post('isi'),
			'id_pariwisata' => $this->input->post('id')
		];

		if ($this->m_complaint->simpan($data)) 
		{
			redirect('pengaduan/FormPengaduan/'.$id);
		}
	}
}
