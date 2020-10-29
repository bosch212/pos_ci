<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Setoran extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model(''); 
		//$this->load->helper('url');
	}
	
	public function index()
	{	
		$data['menudashboard'] = "";
		$data['menudatamaster'] = "";
		$data['menudatamasteritem'] = "";	
		$data['menudatatransaksi'] = "active";
		$data['menudatamasterpembelian'] = "";
		$data['menudatamastersetoran'] = "active";	
					
		$this->load->view('top');
		$this->load->view('navigator', $data);
		$this->load->view('Transaksi/data_setoran');		
	}

	public function tambah_setoran()
	{
		$data['menudashboard'] = "";
		$data['menudatamaster'] = "";
		$data['menudatamasteritem'] = "";	
		$data['menudatatransaksi'] = "active";
		$data['menudatamasterpembelian'] = "";
		$data['menudatamastersetoran'] = "active";	
					
		$this->load->view('top');
		$this->load->view('navigator', $data);
		$this->load->view('Transaksi/tambah_setoran');
	}
}