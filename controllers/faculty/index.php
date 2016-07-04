<?php

/* 
 * Student Info: Name=Nrupenkumar Nitinkumar Desai, ID=16076
 * Subject: CS526_HW2_Summer_2016
 * Author: admin
 * Filename: index.php
 * Date and Time: Jun 25, 2016 12:44:18 AM
 * Project Name: OSCSite
 */
error_reporting(E_ALL ^ E_NOTICE);
//complete code listing for controllers/guest/index.php
include_once 'models/attandence_repo.php';
include_once 'models/assignments.php';
include_once 'models/student.php';
//include_once 'models/attendance.php';

include_once 'models/handout_repo.php';
//include_once 'models/handouts.php';


$hasAction = isset($_GET['action']);
if ($hasAction) {
    $action = $_GET['action'];
} else {
    $action = 'index';
}

$content = include_once "controllers/faculty/$action.php";
return $content;