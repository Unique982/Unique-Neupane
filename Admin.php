<?php

require("connection.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In</title>
   <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="login-form">
        <h2>Login</h2>
        
        <form method="POSt">
            
            <div class="input-filed">
                
                <label>User Name:</label>
               

                    <input type="text" placeholder="Username" name="AdminName">
                </div>
                <br>
                
            <div class="input-filed">
                
              <label>Password:</label>
              <br>
                <input type="password" placeholder="Password" name="AdminPassword">
            </div>
            <button type="submit" name="Signin">Sign In</button>
            <div class="extra">
                <a href="#">Forget Password ?</a>
                <a href="#">Create an Account</a>

            </div>
        </form>
    </div>
    <?php
    if(isset($_POST['Signin'])) {
        $query = "SELECT * FROM `admin_login` WHERE `Admin_Name` = ? AND `Admin_Password` = ?";
       
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "ss", $_POST['AdminName'], $_POST['AdminPassword']);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        if(mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION['AdminLoginID'] = $_POST['AdminName'];
            header("location: index.php");
            exit();
        } else {
            echo "<script>alert('Incorrect Password');</script>";
        }
    }
    ?>
</body>
</html>