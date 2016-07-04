<?php

/* 
 * Student Info: Name=Nrupenkumar Nitinkumar Desai, ID=16076
 * Subject: CS526_HW2_Summer_2016
 * Author: admin
 * Filename: attandence_repo.php
 * Date and Time: Jun 25, 2016 1:34:54 AM
 * Project Name: OSCSite
 */



class AttendanceRepo {

    public static function getPublishers() {
        global $db;
        $query = "SELECT * FROM publishers ORDER BY publisherID";
        $result = $db->query($query);
        $publishers = array();
        foreach ($result as $row) {
            $publisher = new Publisher($row['publisherID'], $row['publisherName']);
            $publishers[] = $publisher;
        }
        return $publishers;
    }

    public static function getPublisher($publisher_id) {
        global $db;
        $query = "SELECT * FROM publishers WHERE publisherID = $publisher_id";
        $result = $db->query($query);
        $row = $result->fetch();
        $publisher = new Publisher($row['publisherID'], $row['publisherName']);
        return $publisher;
    }
    
    public static function getAttendance ($week_id){
        global $db;
        $query = "SELECT * FROM attendances WHERE weekID = $week_id";
        //echo $query;
        $result = $db->query($query);
        
        $student_attendance = array();
        foreach ($result as $row){
           $s_query = "select firstname,lastname from student where studentID = ".$row['studentID'];
           $r = $db->query($s_query);
          foreach ($r as $rw){
               $temp_student = new Student($row['studentID'], $rw['firstname'], $rw['lastname']);
          }
          
           $temp_att = new Attendance($week_id, $temp_student, $row['attendance'], $row['attendanceID']);
           $student_attendance[] = $temp_att;
        }
        return $student_attendance;
    }
    
    public static function saveAttendance(){
        
    }
}
