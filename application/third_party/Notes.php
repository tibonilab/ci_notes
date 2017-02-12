<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notes extends CI_Controller{

  public function index()
  {
      $this->_view('notes/index');
  }

  public function foo()
  {
      $this->_view('notes/index', 'theme2');
  }

  private function _view($view, $theme = 'theme1')
  {
      $this->load->view('templates/' . $theme . '/header');
      $this->load->view($view);
      $this->load->view('templates/' . $theme . '/footer');
  }

}
