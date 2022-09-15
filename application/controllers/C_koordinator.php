<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_koordinator extends CI_Controller {

	public function index()
	{
		$this->load->view('koordinator/inc/head');
		$this->load->view('koordinator/inc/sidebar');
		$this->load->view('koordinator/inc/footer');
	}
	public function surat()
	{
		$this->load->view('koordinator/inc/head');
		$this->load->view('koordinator/inc/sidebar');
		$this->load->view('koordinator/input/surat');
		$this->load->view('koordinator/inc/footer');
	}
	
}