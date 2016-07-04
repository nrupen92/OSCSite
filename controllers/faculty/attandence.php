<?php

/* 
 * Student Info: Name=Nrupenkumar Nitinkumar Desai, ID=16076
 * Subject: CS526_HW2_Summer_2016
 * Author: admin
 * Filename: attandence.php
 * Date and Time: Jun 25, 2016 12:51:07 AM
 * Project Name: OSCSite
 */

///echo 'inside attandence.php';



//$week_id=1;
if (isset($_GET['week'])) {
    $week_id = $_GET['week'];
    $data = AttendanceRepo::getAttendance($week_id);
}else {
    $data['message']= 'please select week first.';
}
//echo 'week id ='.$week_id;



return 'views/attandence_page.php';
