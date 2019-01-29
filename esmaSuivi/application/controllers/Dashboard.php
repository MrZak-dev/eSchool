<?php

  class Dashboard extends CI_Controller{
    public function index(){
      $is_user_login = $this->session->userdata('student_login');

      if (isset($is_user_login)) { // if the user already logged in
          $user_id = $this->session->userdata('student_id');

          $user_marks = $this->marks_table_data->marks_data($user_id);

          //Student Marks (Les Notes)
          $data['user_marks'] = $user_marks;

          //this will load the view with some data for marks table view
          $this->load->view('panel/dashboard',$data);
      }else{
        redirect('/');
      }

    }
  }
