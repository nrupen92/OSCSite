<?php

/* 
 * Student Info: Name=Nrupenkumar Nitinkumar Desai, ID=16076
 * Subject: CS526_HW2_Summer_2016
 * Author: admin
 * Filename: attandence_page.php
 * Date and Time: Jun 25, 2016 1:26:36 AM
 * Project Name: OSCSite
 */

//echo 'attandence page included.';


$assingment = $assingmentData['data'];
//print_r($assingment);
?>
<form method="post" action="index.php?action=assignments">
    <div>
        Assingnment No : <input type="text" name="assingmentId" value="<?php echo isset($assingment['assignmentIS'])? $assingment['assignmentIS']:''  ?>"
    </div>
    <div>
        Week No : <input type="text" name="weekID" value="<?php echo isset($assingment['weekID'])? $assingment['weekID']:''  ?>"
    </div>
    <div>
        Assingment : <textarea name="assignmentText"><?php echo isset($assingment['assignment_text']) ? $assingment['assignment_text'] : ''; ?> </textarea>
    </div>
    <input type="submit" name="saveAssingment" value="Save" />
</form>