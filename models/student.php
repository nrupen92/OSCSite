<?php

/*
 * Student Info: Name=Nrupenkumar Nitinkumar Desai, ID=16076
 * Subject: CS526_HW2_Summer_2016
 * Author: nrupe
 * Filename: student.php
 * Date and Time: Jul 4, 2016 5:15:33 PM
 * Project Name: OSCSite
 */

class Student {

    public static function getStudent($id=null) {
        global $db;
        if($id!=NULL){
        $query = "SELECT * FROM student WHERE studentID = $id";
        }else {
            $query = "SELECT * FROM student";
        }
        $result = $db->query($query);
        $students = array();
        foreach($result as $d){
        $student['studentID'] = $d['studentID'];
        $student['firstname'] = $d['firstname'];
        $student['lastname'] = $d['lastname'];
        $students[] =$student;
        }
        return $students;
    }

}
