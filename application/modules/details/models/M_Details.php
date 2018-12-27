<?php

class M_Details extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

    public function getItems($houseId){
        $sql = "SELECT * FROM house LEFT JOIN imageDetail ON house.houseId = imageDetail.houseId WHERE house.houseId = '$houseId'";
        
        $query = $this->db->query($sql); //echo $sql; die();
        return $query->result_array();
    }
}
?>
