<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pembelian extends CI_Controller {
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
		$data['menudatamasterpembelian'] = "active";
		$data['menudatamastersetoran'] = "";	
					
		$this->load->view('top');
		$this->load->view('navigator', $data);
		$this->load->view('Transaksi/data_pembelian');		
	}

	public function tambah_po()
	{
		$data['menudashboard'] = "";
		$data['menudatamaster'] = "";
		$data['menudatamasteritem'] = "";	
		$data['menudatatransaksi'] = "active";
		$data['menudatamasterpembelian'] = "active";
		$data['menudatamastersetoran'] = "";	
					
		$this->load->view('top');
		$this->load->view('navigator', $data);
		$this->load->view('Transaksi/tambah_po');	
	}
}