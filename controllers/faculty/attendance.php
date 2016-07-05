<?php

/*
 * Student Info: Name=Nrupenkumar Nitinkumar Desai, ID=16076
 * Subject: CS526_HW2_Summer_2016
 * Author: admin
 * Filename: attandence.php
 * Date and Time: Jun 25, 2016 12:51:07 AM
 * Project Name: OSCSite
 */



$students = array();
if (isset($_GET['week'])) {
    $weekID = $_GET['week'];
    $attendanceData = array();
    $students = Student::getStudent();
    $i = 0;
    foreach ($students as $student) {
        $students[$i++]['attendance'] = AttendanceRepo::getAttendance($student['studentID'], $weekID);
    }
} else if (isset($_POST['week_id'])) {

    $weekID = $_POST['week_id'];
    if (AttendanceRepo::saveAttendance($_POST['week_id'], $_POST['attendance'], $_POST['student_id'])) {
        $data['msg'] = 'Record updated successfully.';
    }
    $students = Student::getStudent();
    $i = 0;
    foreach ($students as $student) {
        $students[$i++]['attendance'] = AttendanceRepo::getAttendance($student['studentID'], $weekID);
    }
    
} else {
    $data['message'] = 'please select week first.';
}

return 'views/attendance.php';
