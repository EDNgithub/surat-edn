<?php 

class M_user extends CI_Model{
	function tampil_data_user(){
		return $this->db->get('user');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	function user(){
		$query = $this->db->query("SELECT user.id_user, user.username, user.nama_lengkap, user.password, user.email, user.level,user.divsi, user.jabatan,user.alamat, user.no_telpon, jabatan.id_jabatan, jabatan.jabatan, divis.id_divisi, divis.divisi FROM user LEFT JOIN jabatan ON jabatan.id_jabatan = user.jabatan JOIN divis ON divis.id_divisi = user.divsi WHERE user.level ='koordinator' AND user.divsi = '".$this->session->divsi."'");
        return $query->result();

	}
}

