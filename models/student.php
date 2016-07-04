<?php

/* 
 * Student Info: Name=Nrupenkumar Nitinkumar Desai, ID=16076
 * Subject: CS526_HW2_Summer_2016
 * Author: admin
 * Filename: student.php
 * Date and Time: Jun 25, 2016 1:43:14 AM
 * Project Name: OSCSite
 */

class Student{
    private $student_id, $stu_fname, $stu_lname;
    
    public function __construct($id, $fname, $lname){
        $this->student_id = $id;
        $this->stu_fname = $fname;
        $this->stu_lname = $lname;
    }
    function getStudent_id() {
        return $this->student_id;
    }

    function getStu_fname() {
        return $this->stu_fname;
    }

    function getStu_lname() {
        return $this->stu_lname;
    }

    function setStudent_id($student_id) {
        $this->student_id = $student_id;
    }

    function setStu_fname($stu_fname) {
        $this->stu_fname = $stu_fname;
    }

    function setStu_lname($stu_lname) {
        $this->stu_lname = $stu_lname;
    }


}