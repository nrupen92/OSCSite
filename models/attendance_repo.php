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

    public static function saveAttendance($weekID,$attendance, $studentId){
        global $db;
       if(self::isAttendanceExists($weekID, $studentId)){
           $query = "update attendances set attendance = '$attendance' where weekID=$weekID and studentID=$studentId";
           if($db->query($query)){
               return true;
           }else {
               return false;
           }
       }else {
           $query = "insert into attendances (attendance, weekID, studentID) values ('$attendance', $weekID, $studentId)";
           echo $query;
           if($db->exec($query)){
               return true;
           }else {
               return false;
           }
       }
        
        
    }
    
    public static function isAttendanceExists($weekId, $studentId){
        
        $query = "select * from attendances where weekID=$weekId and studentID = $studentId";
        global $db;
       // echo $query;
        $data = $db->query($query);
        $data =$data->fetch();
        if(empty($data)){
           // echo 'record not found';
            return false;
        }else {
            //echo 'record found.';
            return true;
        }
        
    }
    
    public static function getAttendance($studentID,$weekId){
         $query = "select * from attendances where weekID=$weekId and studentID = $studentID";
        global $db;
        //echo $query;
        $data = $db->query($query);
        $data =$data->fetch();
        //print_r($data['attendance']);exit;
        return $data['attendance'];
    }
    
}
