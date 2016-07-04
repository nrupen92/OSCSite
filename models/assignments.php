<?php

/*
 * Student Info: Name=Nrupenkumar Nitinkumar Desai, ID=16076
 * Subject: CS526_HW2_Summer_2016
 * Author: nrupe
 * Filename: assignments.php
 * Date and Time: Jul 4, 2016 2:46:53 PM
 * Project Name: OSCSite
 */

class Assignments {

    public static function getAssingment($weekID) {
        global $db;
        $query = "select * from assignments where weekID = $weekID";
        $data = $db->query($query);
        $data = $data->fetch();
        $tmpData['assignmentIS'] = $data['assignmentIS'];
        $tmpData['assignment_text'] = $data['assignment_text'];
        $tmpData['weekID'] = $data['weekID'];
        return ($tmpData);
    }

    public static function saveAssignment($weekID, $assignmentText) {
        global $db;
        if (self::isAssingmentExists($weekID)) {
            $query = "update assignments set assignment_text = '$assignmentText' where weekID= '$weekID'";
            if ($db->query($query)) {
                return true;
            } else {
                return false;
            }
        } else {
            echo 'no record found';
            $query = 'INSERT INTO assignments (assignment_text, weekID) values (\'' . $assignmentText . '\',\'' . $weekID . '\')';
            if ($db->exec($query)) {
                return true;
            } else {
                return false;
            }
        }
        
    }

    public static function isAssingmentExists($weekID) {
        global $db;
        $query = "select * from assignments where weekID = $weekID";
        $data = $db->query($query);
        $data = $data->fetch();
        if (empty($data)) {
            return false;
        } else {
            return true;
        }
    }

}
