<?php

  class User_login_check extends CI_Model {

    public function is_student($username,$password){
    $query = $this->db->query("SELECT * FROM (`students`) WHERE
     `student_login`='".$username."' AND `student_password`='".$password."'");
    $rows = $query->row();
    //Return user data id it exists
    return $rows;
    }
    //function for professor login
    public function is_professor($username,$password){
      $query = $this->db->query("SELECT * FROM (`professors`) WHERE
     `professor_login`='".$username."' AND `professor_password`='".$password."'");
      $rows = $query->row();
      //Return user data id it exists
      return $rows;
    }
  }
