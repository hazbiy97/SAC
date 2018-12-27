<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
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
        $this->load->model('User_model');
        // $this->load->model('M_DASHBOARD');

    }

    public function index()
    {
        $this->login();
    }

    public function login()
    {
        if($this->session->userdata('email') != null)
        {
            redirect('login/redirect_to');
        }else{
            // $data['user'] = $this->User_model->get_all_user();

            $data['_view'] = 'login';
            $this->load->view('layout',$data);
        }
    }

    /*
    * Check for user login process
    */
    public function user_login_process() {

        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            if(isset($this->session->userdata['logged_in'])){
                redirect(base_url()."index.php/login/redirect_to");
            }else{
                $data = array(
                    'error_message' => 'Please Fulfill Username & Password !'
                );
                $data['_view'] = 'login/index';
                
                $this->load->view('login',$data);
            }
        } else {
            $hashed = hash('sha512', $this->input->post('password'));
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $hashed
            );
            $result = $this->User_model->login($data);

            if ($result == TRUE) {
                $username = $this->input->post('username');
                $result = $this->User_model->read_user_information($username);
                if ($result != false) {
                    $session_data = array(
                        'email' => $result[0]->email,
                        'role' => $result[0]->role,
                    );

                    $this->session->set_userdata($session_data);
                    redirect(base_url()."index.php/login/redirect_to");
                }
            } else {
                $data = array(
                    'error_message' => 'Invalid Username or Password'
                );

                $data['_view'] = 'login';
                $this->load->view('layout',$data);
            }
        }
    }

    public function redirect_to()
    {
        if($this->session->userdata('email') != null)
        {
            redirect('homepage');
        }else{
            redirect('login/login');
        }
    }
}