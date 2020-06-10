<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan extends CI_Controller 
{
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
		$seg2 = $this->uri->segment(2);
		if ($seg2 == "SelectDestination") 
		{
			$this->vars["nav"] = "false";
			$this->vars["content"] = "public/select-destination";
			$this->vars['main_data'] = $this->m_pariwisata->get_data()->result();
			$this->load->view('public/index', $this->vars);
		}
		else
		{
			$id = $this->uri->segment(3);
			if (!$id) {
				redirect('pengaduan/SelectDestination');
			}
			$this->vars["nav"] = "true";
			$this->vars["content"] = "public/form-pengaduan";
			$this->vars['main_data'] = $this->m_pariwisata->get_where($id)->result();
			$this->load->view('public/index', $this->vars);
		}
	}

}
