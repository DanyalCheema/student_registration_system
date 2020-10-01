<?php
require_once 'db/config.php';

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        $query = "UPDATE student SET name='$name', email='$email', address=' $address' WHERE id='$id'  ";
        $query_run = mysqli_query($connection_string, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:student.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>