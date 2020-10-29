<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Profil extends CI_Controller {
	
	public function index()
	{	
		$data['menudashboard'] = "";
		$data['menudatamaster'] = "active";
		//$data['menudatamastersiswa'] = "";
		$data['menudatamasterprofil'] = "active";		
		//$data['siswa'] = $this->SiswaModel->retrieve_all();
					
		$this->load->view('top');
		$this->load->view('navigator', $data);
		$this->load->view('profil');		
	}
	
		
}