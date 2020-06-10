<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Process extends CI_Controller {
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
		$this->load->model('m_login');
	}

	public function index()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = $this->m_login->check_login($username, $password)->result();
		if (count($data) > 0) 
		{
			foreach ($data as $row) 
			{
				$this->session->set_userdata('login', $row->username);
				$this->session->set_userdata('hak_akses',$row->hak_akses);
				$this->session->set_userdata('name', $row->fullname);
			}

			echo "Login Berhasil";
		}
		else
		{
			echo "Login Gagal";
		}
	}
}
