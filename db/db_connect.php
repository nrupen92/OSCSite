<?php
$dsn = 'mysql:host=localhost:3306;dbname=oscsite';
$username = 'root';
$password = 'root';

try {
    $db = new PDO($dsn, $username, $password);
    echo 'Connected.';
} catch (PDOException $ex) {
    $error_msg = $ex->getMessage();
    include('db_error.php');
    exit();
}
       
?>
