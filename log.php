<?php

include("connection.php");

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM signup WHERE username = '$username'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);

    if($num > 0){
        echo'<script>alert("username already exists!")</script>';
    }

else{
    $insert="INSERT INTO signup(username,password)VALUES('$username','$password')";
    mysqli_query($conn,$insert);
    header("location:admin.php");
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" contents="width=device-width, initial-scale=1">
    <title>Product Review Analysis System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="signup">
  <div class="background">
    <h1>Signup</h1>
    <form  method="POST">
        
        <label>Username</label>
        <input type="username" name="username" required>
        <label>Password</label>
        <input type="password" name="password" required>
        <input type="submit" name="Submit" value="submit">
        </form>
        <p>Already have an account? <a href="admin.php">login here</a></p>
  </div></div>
  </body>
  </html>