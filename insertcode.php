<?php

require_once 'db/config.php';

if(isset($_POST['insertdata']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $query = "INSERT INTO student (`name`,`email`,`address`) VALUES ('$name','$email','$address')";
    $query_run = mysqli_query($connection_string, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: student.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>