<?php

class M_newMenu extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

    public function getClass($email){
        $this->db->select('*');
        $this->db->from('class');
        $this->db->join('users', 'class.lecturer = users.user_id', 'left');
        $this->db->where('email', $email);
        
        $query = $this->db->get(); //echo $sql; die();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else if ($query->num_rows() > 1){
        	return $query->result_array();
        }
    }
}
?>
