<?php
/*
 * Student Info: Name=Nrupenkumar Nitinkumar Desai, ID=16076
 * Subject: CS526_HW2_Summer_2016
 * Author: admin
 * Filename: attandence_page.php
 * Date and Time: Jun 25, 2016 1:26:36 AM
 * Project Name: OSCSite
 */


$assingment = $assingmentData['data'];

if (isset($week_id)) {
    ?>



    <form method="post" action="index.php?action=assignments">
        <div>
            Assingnment No : <input type="text" name="assingmentId" value="<?php echo isset($assingment['assignmentIS']) ? $assingment['assignmentIS'] : '' ?>" />
        </div>
        <div>
            Week No : <input type="text" name="weekID" value="<?php echo isset($assingment['weekID']) ? $assingment['weekID'] : $week_id ?>" disabled/>
        </div>
        <div>
            Assingment : <textarea name="assignmentText"><?php echo isset($assingment['assignment_text']) ? $assingment['assignment_text'] : ''; ?> </textarea>
        </div>
        <input type="submit" name="saveAssingment" value="Save" />
    </form>

    <?php
} else {
    echo 'Please select Week first';
}
?>