<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends MX_Controller 
{
	public function __construct(){
      parent::__construct();
      $this->load->library('session');
      $this->load->model('M_Homepage');
  }

  public function index(){
    $email = $this->session->userdata('email');
    if ($email != null) {
      $data['classes'] = $this->M_Homepage->getClass($email);
      $activeNavbarItem = 'Dijual';
      
      $this->load->module('newmenu');
      $this->newmenu->showNavBar($activeNavbarItem);
      $this->load->view('dashboard', $data);
    }
    else {
      redirect('');
    } 
  }
}

