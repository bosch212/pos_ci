<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SiswaModel extends CI_Model {

  // Fungsi untuk menampilkan semua data siswa
  public function retrieve_all(){
    return $this->db->get('siswa_tb')->result();
  }
  
  // Fungsi untuk menampilkan data siswa berdasarkan NIS nya
  public function retrieve_nis($nis){
    $this->db->select('*');
    $this->db->from('siswa_tb');
    $this->db->where('nis', $nis);    
    //return $this->db->get();
	$q = $this->db->get();
	if($q->num_rows() > 0)
    {
      foreach ($q->result() as $row)
      {
        $data[] = $row;
      }
      return $data;
    }
  }
  
  // Fungsi untuk melakukan simpan data ke tabel siswa
  public function save($data){	
    // Untuk mengeksekusi perintah insert data
    $this->db->insert('siswa_tb', $data); 
  }
  
  // Fungsi untuk melakukan ubah data siswa berdasarkan NIS siswa
  public function update($nis, $data){
    $this->db->where('nis', $nis);
	// Untuk mengeksekusi perintah update
    $this->db->update('siswa_tb', $data);
  }
  
  // Fungsi untuk melakukan menghapus data siswa berdasarkan NIS siswa
  public function deletes($nis){
    $this->db->where('nis', $nis);
	// Untuk mengeksekusi perintah delete data
    $this->db->delete('siswa_tb'); 
  }
}