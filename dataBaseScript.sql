CREATE DATABASE esmaSuivi;

-- PROFESSORS TABLE

CREATE TABLE professors(
  `professor_id` INT(10) AUTO_INCREMENT,
  `professor_name` varchar(100) NOT NULL ,
  `professor_login` varchar(200) NOT NULL UNIQUE,
  `professor_password` varchar(500) NOT NULL,
  `professor_mail` varchar(100),
  `professor_phone` varchar(100),
    PRIMARY KEY (professor_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- CLASSES TABLE

CREATE TABLE classes(
  `class_id` INT(10) AUTO_INCREMENT ,
  `class_name` varchar(200) NOT NULL,
  PRIMARY KEY(class_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- STUDENT TABLE

CREATE TABLE students(
  `student_id` INT(20) AUTO_INCREMENT,
  `student_name` varchar(100) NOT NULL ,
  `student_login` varchar(200) NOT NULL UNIQUE,
  `student_password` varchar(500) NOT NULL,
  `student_mail` varchar(100),
  `student_phone` varchar(100),
  `class_id` INT(10),
    PRIMARY KEY (student_id),
    FOREIGN KEY(class_id) REFERENCES classes(class_id) ON DELETE SET NULL ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- COURSES TABLE

CREATE TABLE courses(
  `course_id` INT(20) AUTO_INCREMENT,
  `course_name` varchar(150) NOT NULL,
  `professor_id`  INT(10),
  `class_id` INT(10),
  PRIMARY KEY(course_id),
  FOREIGN KEY(professor_id) REFERENCES professors(professor_id) ON UPDATE CASCADE ON DELETE SET NULL,
  FOREIGN KEY(class_id) REFERENCES classes(class_id) ON UPDATE CASCADE ON DELETE SET NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- MARKS TABLE

CREATE TABLE marks(
  `mark_id` INT(30) AUTO_INCREMENT,
  `course_id` INT(20),
  `student_id` INT(10),
  `test_mark` DECIMAL(4,2),
  `exam_mark` DECIMAL(4,2),
  `ratt_mark` DECIMAL(4,2),
  PRIMARY KEY(mark_id),
  FOREIGN KEY(course_id) REFERENCES courses(course_id) ON UPDATE CASCADE ON DELETE NO ACTION,
  FOREIGN KEY(student_id) REFERENCES students(student_id) ON UPDATE CASCADE ON DELETE NO ACTION
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
