<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends MX_Controller 
{
	public function __construct(){
      parent::__construct();
      $this->load->library('session');
      $this->issetor = function(&$var, $default = false) {
        return isset($var) ? $var : $default;
      };
  }

  public function getAttendee()
  {
    $issetor = $this->issetor;
    $class_id = $this->input->get('class_id');

    if(!empty($query) && !empty($class_id)) 
    {
      // $params
      $activitiesList = $this->M_MRCR_API->getActivitiesList($account, $query);

      $result = [];
      $result['total_count'] = sizeof($activitiesList);
      $result['items'] = $activitiesList;

      http_response_code(200);
      echo json_encode($result);
    }
    else 
    {
      $error['field'] = null;
      $result['status'] = 'error';
      $error['field'] .= isset($query) ? '': 'q ,';
      $error['field'] .= isset($account) ? '': 'account';
      $error['code'] = 'missing';
      $result['error'] = $error;

      http_response_code(404);
      echo json_encode($result);
    }
  }

  public function initTF(){
    $command = escapeshellcmd('C:\Users\SESA320707\venv\Scripts\python.exe real_time_face_recognition.py');
    //$command = escapeshellcmd('C:\Users\SESA320707\venv\Scripts\python.exe main.py');
    $output = shell_exec($command);
    echo json_encode([
      'result' => 'success'
    ]);
  }

  public function trainTF(){
    $command = escapeshellcmd('ping www.google.com -t 5');
    $output = shell_exec($command);
    echo json_encode([
      'result' => 'success'
    ]);
  }
}

