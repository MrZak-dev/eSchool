<?php

  class User_login_check extends CI_Model {

    public function is_user($username,$password){
    $query = $this->db->query("SELECT * FROM (`students`) WHERE
     `student_login`='".$username."' AND `student_password`='".$password."'");
    $rows = $query->row();
    //Return user data id it exists
    return $rows;
    }
  }
