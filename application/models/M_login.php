<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model
{
	function is_logged_in()
    {
        return $this->session->userdata('id_user');
    }
        function logged_id2()
    {
        return $this->session->userdata('level');
    }
    function test_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }
function input_data($data,$table){
        $this->db->insert($table,$data);
    }

    
}