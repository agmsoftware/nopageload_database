<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller {

	// tampilkan apa yang diinput
	function show()
	{


	$nama_mhs	=$_POST['nama_mhs'];
	$no_mhs		=$_POST['no_mhs'];
	$matkul_mhs	=$_POST['matkul_mhs'];


	// load model
	$this->load->model('m_mhs');
	$this->m_mhs->create_mhs($nama_mhs, $no_mhs, $matkul_mhs);
 

	$data['nama_mhs']	=$_POST['nama_mhs'];
	$data['no_mhs']		=$_POST['no_mhs'];
	$data['matkul_mhs']	=$_POST['matkul_mhs'];


	// tampilkan view
	$this->load->view('show', $data);
		
	}


}

