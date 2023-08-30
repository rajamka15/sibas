<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Email;
use Config\Services;
class Home extends BaseController
{
  /**
	 * Access to current session.
	 *
	 * @var \CodeIgniter\Session\Session
	 */
	protected $session;

	/**
	 * Authentication settings.
	 */
	protected $config;


    //--------------------------------------------------------------------

	public function __construct()
	{
		// start session
		$this->session = Services::session();
		$this->db      = \Config\Database::connect();
	}
    public function index()
    {
      $data_home = $this->db->query("
      SELECT
      (SELECT COUNT(t.id) 'c1' FROM penduduk t) 'count_penduduk',
      (SELECT COUNT(kk.id_kk) 'c1' FROM kartu_keluarga kk) 'count_kk',
      (SELECT COUNT(b.id_periode) 'c1' FROM periode_bansos b) 'count_bansos'
      ")->getRowArray();
			// error_log(print_r($data_home, true), 0);
			$data = [
					"data_home" => $data_home,
			];
        return view('dashboard/index', $data);
    }
}
