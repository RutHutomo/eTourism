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
class M_complaint extends CI_Model
{
	public static $pk = 'id_complaint';
	public static $table = 't_complaint';
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_data()
	{
		$this->db->select('*');
		$this->db->join('t_pariwisata','t_complaint.id_pariwisata = t_pariwisata.id_pariwisata','LEFT');
		$this->db->order_by(self::$pk, 'ASC');

		return $this->db->get(self::$table);
	}

	public function get_where($id)
	{
		$this->db->select('*');
		$this->db->where(self::$pk, $id);

		return $this->db->get(self::$table);
	}

	public function simpan($data)
	{
		return $this->db->insert(self::$table, $data);
	}
	
}