<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_superadmin extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_superadmin');
        $this->load->model('M_login');
    }
	public function index()
	{
		$this->load->view('superadmin/inc/head');
		$this->load->view('superadmin/inc/sidebar');
		$this->load->view('superadmin/home/home');
		$this->load->view('superadmin/inc/footer');
	}
/*User*/
	public function user()
	{
		$data['user'] = $this->M_superadmin->user2();
		$this->load->view('superadmin/inc/head');
		$this->load->view('superadmin/inc/sidebar');
		$this->load->view('superadmin/data/user',$data);
		$this->load->view('superadmin/inc/footer');
	}

	public function tambah_user()
	{
		$data['user2'] = $this->M_superadmin->tampil_data_divisi()->result();
		$data['user3'] = $this->M_superadmin->tampil_data_jabatan()->result();
		$this->load->view('superadmin/inc/head');
		$this->load->view('superadmin/inc/sidebar');
		$this->load->view('superadmin/input/user',$data);
		$this->load->view('superadmin/inc/footer');
	}

	function simpan_user(){
		if($this->M_login->logged_id2() == 'superadmin')
	{
		//$id_user = $this->input->post('id_user');
		$username = $this->input->post('username');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$level = $this->input->post('level');
		$divsi = $this->input->post('divsi');
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
		$this->M_superadmin->input_data($data,'user');
		redirect('C_superadmin/user');
	}
	else
	{
		redirect("C_login");
	}	
	}
	
/*Divisi*/
	public function divisi()
	{
		$data['user'] = $this->M_superadmin->tampil_data_divisi()->result();
		$this->load->view('superadmin/inc/head');
		$this->load->view('superadmin/inc/sidebar');
		$this->load->view('superadmin/data/divisi',$data);
		$this->load->view('superadmin/inc/footer');
	}

	public function tambah_divisi()
	{
		$this->load->view('superadmin/inc/head');
		$this->load->view('superadmin/inc/sidebar');
		$this->load->view('superadmin/input/divisi');
		$this->load->view('superadmin/inc/footer');
	}

	function simpan_divisi(){
		if($this->M_login->logged_id2() == 'superadmin')
	{
		//$id_divisi = $this->input->post('id_divisi');
		$divisi = $this->input->post('divisi');
		$keterangan = $this->input->post('keterangan');
		$data = array(			
			//'id_divisi' => $id_divisi,
			'divisi' => $divisi,
			'keterangan' => $keterangan
			);
		$this->M_superadmin->input_data($data,'divis');
		redirect('C_superadmin/divisi');
	}
	else
	{
		redirect("C_login");
	}	
	}

	function edit_divisi($id_divisi){
			if($this->M_login->logged_id2() == 'superadmin')
	{		
		$where = array('id_divisi' => $id_divisi);
		$data['user'] = $this->M_superadmin->edit_data($where,'divis')->result();
		$this->load->view('superadmin/inc/head');
		$this->load->view('superadmin/inc/sidebar');
		$this->load->view('superadmin/edit/divisi',$data);
		$this->load->view('superadmin/inc/footer');
	}
	else
	{
		redirect("C_login");
	}
	}

	function update_data_divisi()
	{
			if($this->M_login->logged_id2() == 'superadmin')
		{
			$id_divisi = $this->input->post('id_divisi');
			$divisi = $this->input->post('divisi');
			$keterangan = $this->input->post('keterangan');
			$data = array(
			//'id_divisi' => $id_divisi,
			'divisi' => $divisi,
			'keterangan' => $keterangan
					);
			$where = array(
				'id_divisi' => $id_divisi
			);
			$this->M_superadmin->update_data($where,$data,'divis');
			redirect('C_superadmin/divisi');
		}
		else
		{
			redirect("C_login");
		}
	}

	function hapus_divisi($id_divisi){

	if($this->M_login->logged_id2() == 'superadmin')
	{
	$where = array('id_divisi' => $id_divisi);
	$this->M_superadmin->hapus_data($where,'divis');
	redirect('C_superadmin/divisi');
	}
	else
	{
		redirect("C_login");
	}	
	}

	/*Jabatan*/

	public function jabatan()
	{
		$data['user'] = $this->M_superadmin->tampil_data_jabatan()->result();
		$this->load->view('superadmin/inc/head');
		$this->load->view('superadmin/inc/sidebar');
		$this->load->view('superadmin/data/jabatan',$data);
		$this->load->view('superadmin/inc/footer');
	}

	public function tambah_jabatan()
	{
		$this->load->view('superadmin/inc/head');
		$this->load->view('superadmin/inc/sidebar');
		$this->load->view('superadmin/input/jabatan');
		$this->load->view('superadmin/inc/footer');
	}

	function simpan_jabatan(){
		if($this->M_login->logged_id2() == 'superadmin')
	{
		//$id_jabatan = $this->input->post('id_jabatan');
		$jabatan = $this->input->post('jabatan');
		$keterangan = $this->input->post('keterangan');
		$data = array(			
			//'id_jabatan' => $id_jabatan,
			'jabatan' => $jabatan,
			'keterangan' => $keterangan
			);
		$this->M_superadmin->input_data($data,'jabatan');
		redirect('C_superadmin/jabatan');
	}
	else
	{
		redirect("C_login");
	}	
	}

	function edit_jabatan($id_jabatan){
			if($this->M_login->logged_id2() == 'superadmin')
	{		
		$where = array('id_jabatan' => $id_jabatan);
		$data['user'] = $this->M_superadmin->edit_data($where,'jabatan')->result();
		$this->load->view('superadmin/inc/head');
		$this->load->view('superadmin/inc/sidebar');
		$this->load->view('superadmin/edit/jabatan',$data);
		$this->load->view('superadmin/inc/footer');
	}
	else
	{
		redirect("C_login");
	}
	}

	function update_data_jabatan()
	{
			if($this->M_login->logged_id2() == 'superadmin')
		{
			$id_jabatan = $this->input->post('id_jabatan');
			$jabatan = $this->input->post('jabatan');
			$keterangan = $this->input->post('keterangan');
			$data = array(
			//'id_jabatan' => $id_jabatan,
			'jabatan' => $jabatan,
			'keterangan' => $keterangan
					);
			$where = array(
				'id_jabatan' => $id_jabatan
			);
			$this->M_superadmin->update_data($where,$data,'jabatan');
			redirect('C_superadmin/jabatan');
		}
		else
		{
			redirect("C_login");
		}
	}

	function hapus_jabatan($id_jabatan){

	if($this->M_login->logged_id2() == 'superadmin')
	{
	$where = array('id_jabatan' => $id_jabatan);
	$this->M_superadmin->hapus_data($where,'jabatan');
	redirect('C_superadmin/jabatan');
	}
	else
	{
		redirect("C_login");
	}	
	}
}
