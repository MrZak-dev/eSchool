<?php
  class Auth extends CI_CONTROLLER {

      public function index(){
        //User Data
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if($username && $password){
          $is_user = $this->user_login_check->is_user($username,$password); //getting user informations from database

          if(isset($is_user)){
            $user_data = array(
              'student_id' => $is_user->student_id,
              'student_login' => TRUE,
              'student_name' => $is_user->student_name,
              'student_email' => $is_user->student_mail
            );//User data array for saving it in the session

            $this->session->set_userdata($user_data); //save userdata to the session
            redirect('dashboard');
          }else{
            redirect('/');
          }
        }else {
          redirect('/');
        }
      }
  }
