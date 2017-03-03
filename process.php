<?php

$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['Name']) || empty($_POST['Password'])){

 $error = "Username or Password is Invalid";
 }

 else
 {
 //Define $user and $pass
 $user=$_POST['Name'];
 $pass=$_POST['Password'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "login");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM user WHERE Name='$user' AND Password='$pass'");

 $rows = mysqli_num_rows($query);
 if($rows == 1){
 header("Location: welcome.php"); // Redirecting to other page
 }
 else
 {
 $error = "Username or Password is Invalid";
 }
 mysqli_close($conn); // Closing connection
 }
}

 ?>
