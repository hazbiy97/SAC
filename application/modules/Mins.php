<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mins extends CI_Controller {

  //for maintenance, you can do to clear this bottom comment.
  //redirect('http://eidwhd.com/index.php/frontpage/maintenance');

  public function __construct(){
    parent::__construct();

    // Load security
    $this->load->helper('security');

    // Load form helper library
    $this->load->helper('form');

    // Load form validation library
    $this->load->library('form_validation');

    // Load session library
    $this->load->library('session');

    // Load database
    $this->load->model('M_Dashboard');

    // Load url
    $this->load->helper('url');

  }

  public function index(){
    if (true){
      if($this->session->userdata('email') != null)
      {   
        redirect(base_url().'index.php/main');
      }else{
        //$data['user'] = $this->User_model->get_all_user();
        //$data['_view'] = 'dashboard/index';
        $this->load->view('dashboard/index');
      }
    }
    else
    {
      //echo "UNSECURE: This page is being access through an unsecure connection.<br><br>";
      redirect('https://localhost/');
    }
  }
}
