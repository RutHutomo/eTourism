<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemerintah extends CI_Controller {
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
		$this->load->model(['m_pariwisata','m_complaint']);
	}

	public function index()
	{
		$this->vars["title"] = "Dashboard";
		$this->vars["user"] = "Administrator";
		$this->vars["stakeholder"] = "Government";
		$this->vars["content"] = "stakeholder/pemerintah/dashboard";
		$this->vars["bread"] = "DASHBOARD";
		$this->load->view('stakeholder/index', $this->vars);
	}

	public function DataPariwisata()
	{
		if (!$this->uri->segment(4)) 
		{
			$this->vars["title"] = "Data Pariwisata";
			$this->vars["user"] = "Administrator";
			$this->vars["stakeholder"] = "Government";
			$this->vars["content"] = "stakeholder/pemerintah/data_pariwisata";
			$this->vars["bread"] = "DATA PARIWISATA";
			$this->vars["data"] = $this->m_pariwisata->get_data()->result();
			$this->load->view('stakeholder/index', $this->vars);
		}
		else
		{
			$id = $this->uri->segment(5);
			$this->vars["title"] = "Detail Pariwisata";
			$this->vars["user"] = "Administrator";
			$this->vars["stakeholder"] = "Government";
			$this->vars["content"] = "stakeholder/pemerintah/detail_pariwisata";
			$this->vars["bread"] = "DETAIL PARIWISATA";
			$this->vars["main_data"] = $this->m_pariwisata->get_where($id)->result();
			$counter = $this->m_pariwisata->counter_pengunjung($id)->result();

			foreach ($counter as $row) 
			{
				$this->vars["count"] = $row->total;
			}
			$this->load->view('stakeholder/index', $this->vars);
		}
	}

	public function Complaint()
	{
		$this->vars["title"] = "Data Complaint";
		$this->vars["user"] = "Administrator";
		$this->vars["stakeholder"] = "Government";
		$this->vars["content"] = "stakeholder/pemerintah/data_complaint";
		$this->vars["bread"] = "DATA COMPLAINT";
		$this->vars["main_data"] =$this->m_complaint->get_data()->result();
		$this->load->view('stakeholder/index', $this->vars);
	}
}
