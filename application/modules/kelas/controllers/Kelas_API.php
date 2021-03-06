<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_API extends MX_Controller 
{
	public function __construct(){
      parent::__construct();
      $this->load->library('session');
      $this->issetor = function(&$var, $default = false) {
			  return isset($var) ? $var : $default;
			};
  }

   public function getClassAttendee($class_id){
	  $this->db->select('*');
	  $this->db->from('class');
	  $this->db->where('class_id', $class_id);
	  
	  $query = $this->db->get(); //echo $sql; die();

	  if ($query->num_rows() == 1) {
	      // return $query->result_array();
	      $results = $query->result_array();
	      $columns = [];
	      $data = [];

	      foreach ($results as $row_number => $row) {
	          $new_row = [];
	          foreach ($row as $column_name => $column_value) {
	              if ($row_number == 0){
	                  $column = new stdClass();
	                  $column->title = $column_name;
	                  $columns[] = $column;
	              }
	              // echo $column_value;
	              $new_row[] = $column_value;
	          }

	          $data[] = $new_row;
	      }

	      $result = [
	          'data' => $data,
	          'columns' => $columns
	      ];

	      echo "<pre>";
	      print_r($result);

	      return $result;
	      // die();
	  } else if ($query->num_rows() > 1){
	      return $query->result_array();
	  }
    }

