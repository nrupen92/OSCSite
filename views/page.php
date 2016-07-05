<?php
/*
 * Student Info: Name=Nrupenkumar Nitinkumar Desai, ID=16076
 * Subject: CS526_HW2_Summer_2016
 * Author: admin
 * Filename: page.php
 * Date and Time: Jun 25, 2016 12:36:44 AM
 * Project Name: OSCSite
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $pageData->title; ?></title>
        <meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>
        <?php echo $pageData->css; ?>
        <?php echo $pageData->embeddedStyle ?>
    </head>
    <body>
        <?php echo $pageData->navigation; ?>
        <?php
        if ($pageData->content != null) {
            include_once "$pageData->content";
        }
        ?>
        <?php echo $pageData->scriptElements; ?>
    </body>
</html>