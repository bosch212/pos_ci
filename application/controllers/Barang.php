<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Barang extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model(''); 
		//$this->load->helper('url');
	}
	
	public function index()
	{	
		$data['menudashboard'] = "";
		$data['menudatamaster'] = "active";
		$data['menudatamasteritem'] = "active";	
		$data['menudatatransaksi'] = "";
		$data['menudatamasterpembelian'] = "";
		$data['menudatamastersetoran'] = "";	
					
		$this->load->view('top');
		$this->load->view('navigator', $data);
		$this->load->view('barang/barang');		
	}
	
	public function input_barang()
	{
		$data['menudashboard'] = "";
		$data['menudatamaster'] = "active";
		$data['menudatamasteritem'] = "active";	
		$data['menudatatransaksi'] = "";
		$data['menudatamasterpembelian'] = "";
		$data['menudatamastersetoran'] = "";	
					
		$this->load->view('top');
		$this->load->view('navigator',$data);
		$this->load->view('barang/tambah_barang');
		
	}

	public function ubah_barang()
	{
		$data['menudashboard'] = "";
		$data['menudatamaster'] = "active";
		$data['menudatamasteritem'] = "active";	
		$data['menudatatransaksi'] = "";
		$data['menudatamasterpembelian'] = "";
		$data['menudatamastersetoran'] = "";	
					
		$this->load->view('top');
		$this->load->view('navigator',$data);
		$this->load->view('barang/ubah_barang');
	}
}