<?php
$host = "localhost";
$database_user_name = "root";
$database_password = "";
$database_name = "student_registration";

$connection_string = mysqli_connect($host, $database_user_name, $database_password);
mysqli_select_db($connection_string, $database_name);

?>