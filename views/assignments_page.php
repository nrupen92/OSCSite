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

?>
<div class="handout">
<form method="post" action="index.php?action=assignments">
    <div>
        <span>Assingnment No :</span><div> <input type="text" name="assingmentId" value="<?php echo isset($assingment['assignmentIS'])? $assingment['assignmentIS']:''  ?>"/></div>
    </div>
    <div>
        <span> Week No :</span> <div><input type="text" name="weekID" value="<?php echo isset($assingment['weekID'])? $assingment['weekID']:''  ?>"/></div>
    </div>
    <div>
        <span> Assingment :</span><div> <textarea class="txtarea"><?php echo isset($assingment['assignment_text']) ? $assingment['assignment_text'] : ''; ?> </textarea></div>
    </div>
    <br>
    <div><input type="submit" name="saveAssingment" value="Save" /></div>
</form>
</div>