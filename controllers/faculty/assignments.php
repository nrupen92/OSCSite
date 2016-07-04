<?php

/*
 * Student Info: Name=Nrupenkumar Nitinkumar Desai, ID=16076
 * Subject: CS526_HW2_Summer_2016
 * Author: admin
 * Filename: assignments.php
 * Date and Time: Jun 25, 2016 12:51:30 AM
 * Project Name: OSCSite
 */
//echo 'assingment controller<br>';
$assignmentData = array();

if (isset($_GET['week'])) {
    $week_id = $_GET['week'];
    $assingmentData['data'] = Assignments::getAssingment($week_id);

    //echo $week_id;exit;
}
if (isset($_POST['saveAssingment'])) {


    if (Assignments::saveAssignment($_POST['weekID'], $_POST['assignmentText'])) {
        echo 'record updated';
    } else {
        echo 'error occured.';
    }
    exit;
} else {
    $data['message'] = 'please select week first.';
}



return 'views/assignments_page.php';
