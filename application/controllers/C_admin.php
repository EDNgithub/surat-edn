<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->model('M_login');
    }
	public function index()
	{
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/inc/footer');
	}

	/*User*/

	public function user()
	{
		$data['user'] = $this->M_admin->user();
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/data/user',$data);
		$this->load->view('admin/inc/footer');
	}

	public function tambah_user()
	{
		$data['user2'] = $this->M_admin->tampil_data_divisi()->result();
		$data['user3'] = $this->M_admin->tampil_data_jabatan()->result();
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/input/user',$data);
		$this->load->view('admin/inc/footer');
	}


	function simpan_user(){
		if($this->M_login->logged_id2() == 'admin')
	{
		//$id_user = $this->input->post('id_user');
		$username = $this->input->post('username');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$level = $this->input->post('level');
		$divsi = $this->session->divsi;
		$jabatan = $this->input->post('jabatan');
		$alamat = $this->input->post('alamat');
		$no_telpon = $this->input->post('no_telpon');
		$data = array(			
			//'id_user' => $id_user,
			'username' => $username,
			'nama_lengkap' => $nama_lengkap,
			'password' => $password,
			'email' => $email,
			'level' => $level,
			'divsi' => $divsi,
			'jabatan' => $jabatan,
			'alamat' => $alamat,
			'no_telpon' => $no_telpon
			);
		$this->M_admin->input_data($data,'user');
		redirect('C_admin/user');
	}
	else
	{
		redirect("C_login");
	}	
	}
	function hapus_user($id_user){

	if($this->M_login->logged_id2() == 'admin')
	{
	$where = array('id_user' => $id_user);
	$this->M_admin->hapus_data($where,'user');
	redirect('C_admin/user');
	}
	else
	{
		redirect("C_login");
	}	
	}
}
