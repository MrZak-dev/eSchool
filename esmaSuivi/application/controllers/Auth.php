<?php
  class Auth extends CI_CONTROLLER {

      public function index(){
        //User Data
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $login_type = $this->input->post('login_type');

        echo $login_type;

        if($username && $password){
          switch ($login_type) {// two options for a login (as a student) (as a professor)
            case 'student': //as a student
              $is_user = $this->user_login_check->is_student($username,$password); //getting user informations from database for a student    
              if(isset($is_user)){
                $user_data = array(
                  'login_type' => $login_type,
                  'user_id' => $is_user->student_id,
                  'user_login' => TRUE,
                  'user_name' => $is_user->student_name
                );//User data array for saving it in the session
    
                $this->session->set_userdata($user_data); //save userdata to the session
                redirect('dashboard');
              }else {redirect('/');}
              break;
            
            case 'professor': //as a professor
              $is_user = $this->user_login_check->is_professor($username,$password); //getting user informations from database for a student
              if(isset($is_user)){
                $user_data = array(
                  'login_type'=>$login_type,
                  'user_id' => $is_user->professor_id,
                  'user_login' => TRUE,
                  'user_name' => $is_user->professor_name
                );//User data array for saving it in the session
    
                $this->session->set_userdata($user_data); //save userdata to the session
                redirect('dashboard');
              }else {redirect('/');}
              break;
          }
            //else{
            //redirect('/');
          //}
        }else {
          redirect('/');
        }
      }
  }
