<?php

/* 
 * Student Info: Name=Nrupenkumar Nitinkumar Desai, ID=16076
 * Subject: CS526_HW2_Summer_2016
 * Author: admin
 * Filename: handouts.php
 * Date and Time: Jun 25, 2016 12:51:15 AM
 * Project Name: OSCSite
 */


$handoutData= array();
if (isset($_GET['week'])) {
    $week_id = $_GET['week'];
    $data = HandoutsRepo::getHandout($week_id);
}else if (isset($_POST['handout-text'])){
    if(HandoutsRepo::saveHandouts($_POST['handout-text'], $_POST['weekNo'])){
    $handoutData['msg']='record updated';
    $week_id = $_POST['weekNo'];
    $weekID = $_POST['weekNo'];
    $data = HandoutsRepo::getHandout($week_id);
    }else{
        $handoutData['msg']='Eror occured.';
    }
   
}

else {
    $data['message']= 'please select week first.';
}



return 'views/handouts_page.php';
