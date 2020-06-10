<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stakeholder extends CI_Controller {
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
		$login = $this->session->userdata('login');
		$hak_akses = $this->session->userdata('hak_akses');

		if ($login) 
		{
			if ($hak_akses == "government") 
			{
				redirect('stakeholder/pemerintah');
			}
			elseif ($hak_akses = "swasta") 
			{
				redirect('stakeholder/pengelola');
			}
			else
			{
				$this->load->view('stakeholder/login');
			}
		}
		else
		{
			redirect('stakeholder/login', 'refresh');
		}
	}

	public function index()
	{
		
	}

}
