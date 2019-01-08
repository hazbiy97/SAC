<?php

class M_Insert extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

    public function getClassDetails($class_id){
        $this->db->select('*');
        $this->db->from('class');
        $this->db->where('class_id', $class_id);
        
        $query = $this->db->get(); //echo $sql; die();

        if ($query->num_rows() == 1) {
            return $query->result_array()[0];
        } 
    }
}
?>
