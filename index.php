<?php
    $title = 'Home Page';
    require_once 'includes/header.php';
    require_once 'db/config.php';

    $error = "";
    if(isset($_REQUEST["btn_login"])){
        $user_name = $_POST['user_name'];
        $password=$_POST['password'];
        $sql_user = "SELECT * FROM admin_user WHERE name ='$user_name' and password = '$password'";

        $result = mysqli_query($connection_string, $sql_user);
    
        if(mysqli_num_rows($result)==1) {
            echo "good";
            header("location: dashboard.php");
        }
        else{
            $error = 'Invalid User Name or password';
        } 
    }
?>

<link rel="stylesheet" href="css/index.css" type="text/css">


<div class="container-fluid  bg " style = "padding: 9%;" >
    
    <div class="card bg-light mb-3 " style="width: 20rem;">
        <div class="card-header">
            <b>Log In</b>
            <?php if($error !== ""){?>
                <p style="text-align: center; color: red;">
                    <?=$error;?>
                </p>
            <?php } ?>
        </div>
        <div class="card-body">
            <form  method= "POST" >
                <div class="form-group">
                    <label for="user_name"><b>User Name</b></label>
                    <input type="text" class="form-control" id="user_name" placeholder="Enter User Name" name="user_name">
                </div>
                <div class="form-group">
                    <label for="pwd"><b>Password:</b></label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                </div>
                <button type="submit" class="btn btn-primary" name = "btn_login">Submit</button>
            </form>
        </div> 
    </div>
</div>



<?php require_once 'includes/footer.php'; ?>