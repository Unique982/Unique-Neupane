<?php
$conn =new mysqli("localhost", "root", "", "curd") OR die("Error: " . mysqli_error($conn));
session_start();
// code to save user data
if(isset($_POST['save'])) {
     // write a code username empty or not empty check 
    if(!empty($_POST['username']) && !empty($_POST['password'])) {
       $username =$_POST['username'];
       $password =$_POST['password'];
    //    insert id in col
    $iQuery = "INSERT INTO list (username, password) VALUES (?, ?)";

      
       $stmt =$conn->prepare($iQuery);

    //    pass the value in statement
    // "ss" this 2 ss meaning is string username is string and password is string ; datatype  is string write a 's';
       $stmt->bind_param("ss", $username, $password);
       if($stmt->execute()) {
     $_SESSION['msg'] ="New record is successfuly inserted.";
     $_SESSION['alert'] = "alert alert-success";
       }
       $stmt->close();
       $conn->close();
    }
    // username and password are empty then write a else's statement
    else {
        #alert msg
        $_SESSION['msg'] ="Username ans Password should not be empty.";
        $_SESSION['alert'] = "alert alert-warning";
    }
    'header("location: index.php")';
}
// delete slected data button 
if(isset($_POST['delete'])) {
    $id =$_POST['delete'];
     

     $dQuery = "DELETE FROM list WHERE id = ?";
     $stmt->$conn->prepare($dQuery);
     $stmt->bind_param('i', $id);
     if($stmt->execute()) {
  $_SESSION['msg'] ="Selected record is successfully deleted.";
  $_SESSION['alert'] ="alert alert-danger";
     }
     $stmt->close();
     $conn->close();
     'herader("location: index.php")';

}
// update selected user data
if(isset($_POST['edit'])){
    if(!empty($_POST['username']) && !epty($_POST['password'])){
        $username =$_POST['username'];
        $password =$_POST['password'];
        $id =$_post['edit'];


    //  update query 

        $uQuery ="UPDATE list SET username= ?, WHERE id= ?";
        $stmt =$conn->prepare($uQuery);
        $stmt->bind_param('ssi', $username, $passwod, $id);
         if($stmt->executed()) {
            $_SESSION['mgs'] = "Selected record is successfully Update.";
            $_SESSION['alert'] ="alert alert-success";
         }
         $stmt->close();
         $conn->close();

    } else {
    $_SESSION['msg'] ="Username ans Password should not be empty.";
    $_SESSION['alert'] = "alert alert-warning";
    }
}
?>