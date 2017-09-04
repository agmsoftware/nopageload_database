<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller {

	// tampilkan apa yang diinput
	function show()
	{



	$nama_mhs	=$_POST['nama_mhs'];
	$no_mhs		=$_POST['no_mhs'];
	$matkul_mhs	=$_POST['matkul_mhs'];

	//$nama_mhs				= $this->input->post('nama_mhs');
	//$no_mhs 				= $this->input->post('no_mhs');
	//$matkul_mhs				= $this->input->post('matkul_mhs')
	

	// load model
	$this->load->model('m_mhs');
	$this->m_mhs->create_mhs($nama_mhs, $no_mhs, $matkul_mhs);
 

	$data['nama_mhs']	=$_POST['nama_mhs'];
	$data['no_mhs']		=$_POST['no_mhs'];
	$data['matkul_mhs']	=$_POST['matkul_mhs'];

		//$stmt = $DBcon->prepare("INSERT INTO student(student_name,student_roll_no,student_class) VALUES(:student_name, :student_roll_no,:student_class)");

		// hasil entrys
		//$nama_mhs				= $this->input->post('nama_mhs');
		//$no_mhs 				= $this->input->post('no_mhs');
		//$matkul_mhs				= $this->input->post('matkul_mhs')


		// tampilkan view
		$this->load->view('show', $data);
		
	}


}

