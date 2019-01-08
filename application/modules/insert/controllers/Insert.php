<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert extends MX_Controller 
{
	public function __construct(){
      parent::__construct();
      $this->load->module('newmenu');
      $this->load->model('M_Insert');
      $this->load->library('session');
  }

  public function students($class_id)
  {
    $email = $this->session->userdata('email');
    if ($email != null) {
      $activeNavbarItem = 'Dijual';
      $data = [];
      $data['class_details'] = $this->M_Insert->getClassDetails($class_id);
      // print_r($data['class_details']);

      $this->newmenu->showNavBar($activeNavbarItem);
      $this->load->view('insert', $data);
    }
    else {
      redirect('');
    } 
  }
}

