<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function index()
	{
		// $data['menudashboard'] = "active";
		// $data['menudatamaster'] = "";
		// $data['menudatamasteritem'] = "";
		// $data['menudatatransaksi'] = "";
		// $data['menudatamasterpembelian'] = "";
		// $data['menudatamastersetoran'] = "";
		
		// Memanggil view dashboard.php		
		// $this->load->view('top');
		// $this->load->view('navigator', $data);
		$this->load->view('auth/login');
    }
    
    public function register()
    {
        $this->load->view('auth/register');
    }
}
