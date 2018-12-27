<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends MX_Controller 
{
	public function __construct(){
      parent::__construct();
      $this->load->library('session');
      $this->load->model('M_Details');
      //$this->load->model('M_detail');
      //$this->load->model('User_model');
      //$this->load->model('M_dashboard');
      //$this->load->library('../controllers/mail');
  }

  public function rumah($houseId){
    if ($this->session->userdata('email') == null) {
      
        $data['rumahs'] = $this->M_Details->getItems($houseId);
 				//jumlah item
          //$data['TPs'] = $this->M_Homepage->getItems();
        //$data['TPs'] = $this->M_dashboard->get_tp_sto();

        //$data['_view'] = '_rfi/additional/menu';
        //$this->load->view('_rfi/additional/header', $data);
        $this->load->module('menu');
        $this->menu->showMenu();
        $this->load->view('Details', $data); 
        //$this->load->view('_rfi/additional/footer');
        
        /*else {
          //$this->load->view('_smart/footer_dashboard_nodataonmap');
        }*/
      
    }
    else {
      $this->session->sess_destroy();
      redirect(base_url());
    }
  }
}

