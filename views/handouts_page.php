<?php
/*
 * Student Info: Name=Nrupenkumar Nitinkumar Desai, ID=16076
 * Subject: CS526_HW2_Summer_2016
 * Author: admin
 * Filename: handouts_page.php
 * Date and Time: Jun 25, 2016 3:09:33 AM
 * Project Name: OSCSite
 */
?>
<br>
<?php echo isset($handoutData['msg'])? $handoutData['msg']: '' ;?>
<form action='index.php?action=handouts' method="post">
    <div>
        <div>
           
            Week No : <input type="text" name="weekNo" value ="<?php echo isset($data) ? $data['weekID'] : ''; ?>" />
        </div>
        <div>
            Handout No : <input type="text" name="weekNo" value ="<?php echo isset($data) ? $data['handoutID'] : ''; ?>" />
        </div>
        <div>
            Handout Details:<br>
            <textarea name="handout-text"><?php echo isset($data) ? $data['handoutText'] : ''; ?> </textarea>
        </div>
        <div>
            <input type="submit" value="Save" name="saveHandout"/>
        </div>
            
            
    </div>
</form>