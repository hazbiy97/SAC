<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewMenu extends MX_Controller 
{
	public function __construct(){
      parent::__construct();
      $this->load->model('M_newMenu');
      $this->load->library('session');
  }

  public function showNavBar($activeNavbarItem){
    $email = $this->session->userdata('email');
    $data = [];
    $data['activeNavbarItem'] = $activeNavbarItem;
    $data['classes'] = $this->M_newMenu->getClass($email);

		$this->load->view('header', $data);
  }
}

