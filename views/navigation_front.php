<?php

if(isset($_POST['week'])){
    $weekID = $_POST['week'];
}
$weeks = getWeeks();
$str_dropdown ='';
echo "<pre>";foreach ($weeks as $week){
    
    $str_dropdown .= '<option value ='.$week['weekID'].'>Week '.$week['weekNo'].'</option><br>';
}

echo "</pre>";


return "

<form method='post' action='index.php'>
Select Week :
<select onchange ='this.form.submit()' name='week'>
                ".$str_dropdown."
            </select>
            </form> 
            <nav>
    
    <a href='index.php?action=attandence".(isset($weekID)? '&week='.$weekID: '')."'>Attandence</a>
    <a href='index.php?action=handouts".(isset($weekID)? '&week='.$weekID: '')."'>Handouts</a>
    <a href='index.php?action=assignments".(isset($weekID)? '&week='.$weekID: '')."'>Assignments</a>
</nav>
";
