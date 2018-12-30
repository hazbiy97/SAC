<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends MX_Controller 
{
	public function __construct(){
      parent::__construct();
      $this->load->module('newmenu');
      $this->load->model('M_Kelas');
      $this->load->library('session');
  }

  public function attendance($class_id)
  {
    $email = $this->session->userdata('email');
    if ($email != null) {
      $activeNavbarItem = 'Dijual';
      $data = [];
      $data['class'] = $this->M_Kelas->getClassDetails($class_id)[0];
      $data['tableDataObject'] = $this->M_Kelas->getClassAttendee($class_id);
      // print_r ($data);die();
      // $data['class'] = [
      //   'name' => 'hehe'
      // ];

      $this->newmenu->showNavBar($activeNavbarItem);
      $this->load->view('class', $data);
    }
    else {
      redirect('');
    } 
  }
}

