<?php
  class Get_user_data extends CI_Model{
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
    public function professor_classes_data($user_id){
      $query = $this->db->query("SELECT c.class_id , c.class_name FROM professors p , classes c , 
      classes_professors_link cp WHERE p.professor_id = cp.professor_id AND cp.class_id = c.class_id AND p.professor_id =".$user_id."");
      return $query->result();
    }
    public function professor_courses_st($user_id,$class_id){
      $query = $this->db->query("SELECT cr.course_id , cr.course_name  from 
      courses cr , classes cl , classes_courses_link clcr, professors pr , classes_professors_link clpr 
      where cr.course_id = clcr.course_id and clcr.class_id = cl.class_id 
      and pr.professor_id = clpr.professor_id and cl.class_id = clpr.class_id
      and cl.class_id =".$class_id." AND pr.professor_id =".$user_id."");
      return $query->result();
    }
    public function students_list($class_id){
      $query = $this->db->query("SELECT st.student_id , st.student_name from students st where st.class_id =".$class_id."");
      return $query->result();
    }
  }
