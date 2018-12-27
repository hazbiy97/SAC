<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends MX_Controller 
{
	public function __construct(){
      parent::__construct();
      $this->load->library('session');
      //$this->load->model('M_dashboard');
      //$this->load->model('M_detail');
      //$this->load->model('User_model');
      //$this->load->model('M_dashboard');
      //$this->load->library('../controllers/mail');
  }

  public function showMenu(){
    if ($this->session->userdata('email') == null) {
      
        $data['usernya'] = $this->session->userdata('userid');
        $data['namenya'] = $this->session->userdata('name');

        if ($this->session->userdata('pict') != "") {
          $data['pict'] = $this->session->userdata('pict');;
        }
        else {
          $data['pict'] = "unknown";
        }

        $data['filterby_tp'] = false;
        $data['fromnya'] = $this->session->userdata('from');
        $data['admin'] = $this->session->userdata('admin'); 
        $data['role'] = $this->session->userdata('role');
        $data['account'] = $this->session->userdata('account');
        $data['tp_id'] = $this->session->userdata('tp_id');
        if($data['role'] != 'TP' && isset($_GET["filterby_tp"])){
          $data['tp_id'] = $_GET["filterby_tp"] == 'all' ? null : $_GET["filterby_tp"];
          $data['filterby_tp'] = true;
          if ($data['role'] == 'TP'){
            redirect(base_url()."/dashboard");
          }
        }
 
        //$data['TPs'] = $this->M_dashboard->get_tp_sto();

        //$data['_view'] = 'menu';
        $this->load->view('header', $data);
        $this->load->view('footer', $data);
        $this->load->view('menu', $data);
        //$this->load->view('index', $data); 
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

