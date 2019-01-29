<?php

  // LOGIN CONTROLLER

  class LoginController extends CI_CONTROLLER {
    public function index(){
      $this->load->view('user/user_login'); // Open login view
      $this->session->sess_destroy(); //Destroy The session

      //Forms validation
      $this->form_validation->set_rules('username','Username','required');
      $this->form_validation->set_rules('password','Password','required');

      //user data
      $username = $this->input->post('username');
      $password = $this->input->post('password');


      if ($username && $password){ //check later if this is necessary or not
        redirect('/auth');
      }else {
        $this->load->view('user/user_login');
      }
    }
  }
