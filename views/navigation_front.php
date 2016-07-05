<?php

if (isset($_POST['week'])) {
    $weekID = $_POST['week'];
} elseif (isset($_GET['week'])) {
    $weekID = $_GET['week'];
}
$weeks = getWeeks();
$str_dropdown = '';


echo "<pre>";
$str_dropdown .= '<option >Select</option><br>';
foreach ($weeks as $week) {

    if (isset($weekID) && $weekID == $week['weekID']) {
        $str_dropdown .= '<option value =' . $week['weekID'] . ' selected>Week ' . $week['weekNo'] . '</option><br>';
    } else {
        $str_dropdown .= '<option value =' . $week['weekID'] . '>Week ' . $week['weekNo'] . '</option><br>';
    }
}

echo "</pre>";


return "
<div class=\"nav left\">    
<ul>    
   <li> <a href='index.php?action=attendance" . (isset($weekID) ? '&week=' . $weekID : '') . "'>Attendance</a></li>
    <li><a href='index.php?action=handouts" . (isset($weekID) ? '&week=' . $weekID : '') . "'>Handouts</a></li>
  <li><a href='index.php?action=assignments" . (isset($weekID) ? '&week=' . $weekID : '') . "'>Assignments</a></li>
</ul>
</div>
<div class=\"content right\">
<form method='post' action='index.php'>
<div>
Select Week :
</div>
<div class=\"styled-select blue semi-square\">
<select onchange ='this.form.submit()' name='week'>
                " . $str_dropdown . "
            </select>            
            </div>
            </form> 
           
";
