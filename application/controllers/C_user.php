<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        $this->load->model('M_login');
    }
	public function index()
	{
		$this->load->view('user/inc/head');
		$this->load->view('user/inc/sidebar');
		$this->load->view('user/home/home');
		$this->load->view('user/inc/footer');
	}
/*Surat*/
	public function surat()
	{
		$data['user'] = $this->M_user->tampil_data_user()->result();
		$this->load->view('user/inc/head');
		$this->load->view('user/inc/sidebar');
		$this->load->view('user/input/surat',$data);
		$this->load->view('user/inc/footer');
	}

	function simpan_surat(){

	if($this->M_login->logged_id2() == 'user')
	{

		//$id_surat = $this->input->post('id_surat');
		$tanggal_kirim_surat = date('d-m-Y');
		$tanggal_surat = $this->input->post('tanggal_surat');
		$lampiran = $this->input->post('lampiran');
		$sifat_surat = $this->input->post('sifat_surat');
		$tujuan = $this->input->post('tujuan');
		$judul_surat = $this->input->post('judul_surat');
		$isi_surat = $this->input->post('isi_surat');
		$lampiran_file = $this->input->post('lampiran_file');
		$status = '1';
		$verifikator = $this->input->post('verifikator');
		$pengirim = $this->session->id_user;
		$data = array(
			//'id_surat' => $id_surat,
			'tanggal_kirim_surat' => $tanggal_kirim_surat,
			'tanggal_surat' => $tanggal_surat,
			'lampiran' => $lampiran,
			'sifat_surat' => $sifat_surat,
			'tujuan' => $tujuan,
			'judul_surat' => $judul_surat,
			'isi_surat' => $isi_surat,
			'lampiran_file' => $lampiran_file,
			'status' => $status,
			'verifikator' => $verifikator,
			'pengirim' => $pengirim
			);
		$this->M_user->input_data($data,'surat');
		redirect('C_user/surat');
	}
	else
	{
		redirect("C_login");
	}	

	}

	/*FAQ*/

	public function faq()
	{
		$this->load->view('user/inc/head');
		$this->load->view('user/inc/sidebar');
		$this->load->view('user/faq/faq');
		$this->load->view('user/inc/footer');
	}
}
