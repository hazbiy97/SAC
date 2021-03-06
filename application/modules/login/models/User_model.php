<?php
/*
 * Generated by CRUDigniter v3.0 Beta
 * www.crudigniter.com
 */

class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    /*
     * Get user for login
     */
    public function login($data) {
        $this->db->select('*');
        $this->db->from('USERS');
        $this->db->where('email', $data['username']);
        $this->db->where('password', $data['password']);
        $this->db->limit(1);
        
        $query = $this->db->get();
        
        $roles = '';

        foreach ($query->result() as $row)
        {
            $roles = $row->role;
        }

        if ($query->num_rows() == 1) {
            return true;
        }else {
            return false;
        }
    }

    public function read_user_information($username) {
	    $this->db->select('email, role');
        $this->db->from('USERS');
        $this->db->where('email', $username);
        // $this->db->where('password', $data['password']);
        $this->db->limit(1);

        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
}