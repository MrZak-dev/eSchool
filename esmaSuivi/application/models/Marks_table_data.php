<?php
  class Marks_table_data extends CI_Model{
    public function marks_data($user_id){
      $query = $this->db->query("SELECT courses.course_name , marks.test_mark ,  marks.exam_mark  ,  marks.ratt_mark  From
        (`courses`) join (`marks`) on  courses.course_id  =  marks.course_id  join (`students`) on
          marks.student_id = students.student_id where marks.student_id = '".$user_id."'");
      //Query that fetch all courses marks from db
      return $query->result();
      //select classes.class_name , professors.professor_name , courses.course_name From (`classes`) join (`classes_professors_link`) on 
      //classes.class_id = classes_professors_link.class_id join (`professors`) on professors.professor_id = classes_professors_link.professor_id 
       //join (`courses`) on courses.professor_id = professors.professor_id Where classes.class_id = 1;
    }
  }
