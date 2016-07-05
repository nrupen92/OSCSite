<?php
/*
 * Student Info: Name=Nrupenkumar Nitinkumar Desai, ID=16076
 * Subject: CS526_HW2_Summer_2016
 * Author: nrupe
 * Filename: attendence.php
 * Date and Time: Jul 4, 2016 4:06:34 PM
 * Project Name: OSCSite
 */
?>



<?php
if (isset($data['message'])) {
    echo 'select week first';
} else {
    echo isset($data['msg']) ? $data['msg'] : '';
    ?>

    <table>
        <tr>
            <th>Student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Attendance</th>
            <th>Update Attendance</th>
        </tr>
        <?php
        foreach ($students as $student) {
            ?>
            <form action="index.php?action=attendance" method="post">
                <tr>
                <input type="hidden" name="week_id" value="<?php echo $weekID; ?>" />
                <input type="hidden" name="student_id" value="<?php echo $student['studentID']; ?>" />
                <td ><?php echo $student['studentID']; ?></td>
                <td name="firstname"><?php echo $student['firstname']; ?></td>
                <td name="lastname"><?php echo $student['lastname']; ?></td>
                <td><?php echo $student['attendance']; ?></td>
                <td>
                    <select name="attendance" onchange ='this.form.submit()'>
                        <option>Select</option>
                        <option>Present</option>
                        <option>Absent</option>
                        <option>Leaving Early</option>
                        <option>Come Late</option>
                    </select>


                </td>
                </tr>
            </form>    

            <?php
        }
        echo ' </table>';
    }