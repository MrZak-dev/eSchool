<?php
class Set_user_data extends CI_Model {
    public function insert_mark($course_id,$student_id,$test_mark,$exam_mark,$ratt_mark,$professor_id){
        $data = array(
            'course_id'=>$course_id,
            'test_mark'=>$test_mark,
            'exam_mark'=>$exam_mark,
            'ratt_mark'=>$ratt_mark,
            'student_id'=>$student_id,
            'professor_id'=>$professor_id
        );
        $this->db->insert('marks',$data);
    }
}