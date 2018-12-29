<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends MX_Controller 
{
	public function __construct(){
      parent::__construct();
      $this->load->library('session');
  }

  public function initTF(){
    echo "<pre>";
    $command = escapeshellcmd('ping www.google.com -t 5');
    $output = shell_exec($command);
    echo $output;
  }
}

