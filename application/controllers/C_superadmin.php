<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_superadmin extends CI_Controller {

	public function index()
	{
		$this->load->view('superadmin/inc/head');
		$this->load->view('superadmin/inc/sidebar');
		$this->load->view('superadmin/inc/footer');
	}
}
