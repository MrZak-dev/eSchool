<?php

  class Dashboard extends CI_Controller{
    public function index(){
      $is_user_login = $this->session->userdata('user_login');

      if (isset($is_user_login)) { // if the user already logged in
          $user_id = $this->session->userdata('user_id');
          $login_type = $this->session->userdata('login_type');
          switch ($login_type) {
            case 'student':
              $user_marks = $this->get_user_data->marks_data($user_id); //for a student
              //Student Marks (Les Notes)
              $data['view_data'] = $user_marks;
              break;
            case 'professor':
              $professor_data = $this->get_user_data->professor_classes_data($user_id);
              $data['view_data'] = $professor_data;
              break;
          }
          //this will load the view with some data for marks table view
          $this->load->view('panel/dashboard',$data);
      }else{
        redirect('/');
      }
    }
    public function listes(){
      if($this->session->userdata('login_type') == "professor"){
        $class_id = $this->input->post('class_id');
        $user_id = $this->session->userdata('user_id');
        $data['courses'] = $this->get_user_data->professor_courses_st($user_id,$class_id);
        $data['students'] = $this->get_user_data->students_list($class_id);
        $this->load->view('panel/professor_courses',$data);
      }else{
        redirect('../');
      }
    }
    public function insert(){
      if($this->session->userdata('login_type') == "professor"){
        $professor_id = $this->session->userdata('user_id');
        $course_id = $this->input->post('course_id');
        $student_id = $this->input->post('student_id');
        $test_mark = $this->input->post('test_mark');
        $exam_mark = $this->input->post('exam_mark');
        $ratt_mark = $this->input->post('ratt_mark');
        $this->set_user_data->insert_mark($course_id,$student_id,$test_mark,$exam_mark,$ratt_mark,$professor_id);
        redirect('/dashboard');
      }else{
        redirect('../');
      }
    }
  }
