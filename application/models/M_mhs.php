<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_mhs extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		}




	function create_mhs($nama_mhs, $no_mhs, $matkul_mhs) {

	$this->db->query("insert into mhs(nama_mhs, no_mhs, matkul_mhs)
							values ('$nama_mhs', '$no_mhs','$matkul_mhs') ");
	}	
	






}
