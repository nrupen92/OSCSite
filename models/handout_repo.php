<?php

//use Handouts;

/*
 * Student Info: Name=Nrupenkumar Nitinkumar Desai, ID=16076
 * Subject: CS526_HW2_Summer_2016
 * Author: admin
 * Filename: handout_repo.php
 * Date and Time: Jun 25, 2016 3:11:51 AM
 * Project Name: OSCSite
 */

class HandoutsRepo {

    public static function getHandout($id) {
        global $db;
        $query = "SELECT * FROM handouts WHERE handoutID = $id";
        $result = $db->query($query);
        $row = $result->fetch();
        $handoutAry = array();
        $handoutAry['weekID'] = $id;
        $handoutAry['handoutID'] = $row['handoutID'];
        $handoutAry['handoutText'] = $row['handout_text'];
        return $handoutAry;
    }

    public static function saveHandouts($handoutText, $weekID) {
        global $db;

        if (self::isHandoutExist($weekID)) {
            $query = "update handouts set handout_text = '$handoutText' where weekID= '$weekID'";
            if ($db->query($query)) {
                return true;
            } else {
                return false;
            }
        } else {
            $query = 'INSERT INTO handouts (handout_text, weekID) values (\'' . $handoutText . '\',\'' . $weekID . '\')';
            if ($db->exec($query)) {
                return true;
            } else {
                return false;
            }
        }
    }

    public static function isHandoutExist($weekID) {
        global $db;
        $query = "select * from handouts where weekID = '$weekID'";
        $result = $db->query($query);
        $data = $result->fetch();
        if (!empty($data)) {
            //echo 'record exists';
            return true;
        } else {
            echo 'record not found';
            return false;
        }
    }

}
