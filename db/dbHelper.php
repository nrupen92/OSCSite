<?php

/*
 * Student Info: Name=Nrupenkumar Nitinkumar Desai, ID=16076
 * Subject: CS526_HW2_Summer_2016
 * Author: admin
 * Filename: dbHelper.php
 * Date and Time: Jun 24, 2016 11:55:28 PM
 * Project Name: OSCSite
 */



function getWeeks(){
    global $db;
    $tableName = 'weeks';
    $query = 'select * from '.$tableName;
    $weeks = $db->query($query);
    return $weeks;
}
?>


