<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
class M_login extends CI_Model
{
	public static $pk = 'id_users';
	public static $table = 't_users';
	
	function __construct()
	{
		parent::__construct();
	}

	public function check_login($username,$password)
	{
		$query = $this->db
			->select('')
			->where('username', $username)
			->where('password', $password)
			->get(self::$table);

		return $query;
	}
}