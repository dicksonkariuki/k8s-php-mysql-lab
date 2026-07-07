<?php

session_start();

include 'db.php';

$message="";

if(isset($_POST['login'])){

$reg=$_POST['reg'];

$sql="SELECT * FROM students WHERE reg_no='$reg'";

$result=$conn->query($sql);

if($result->num_rows>0){

$_SESSION['student']=$reg;

header("Location: dashboard.php");

}else{

$message="Student Not Found";

}

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Login</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h2>Student Login</h2>

<form method="POST">

<input type="text" name="reg" placeholder="Registration Number">

<input type="submit" name="login" value="Login">

</form>

<p><?php echo $message; ?></p>

</div>

</body>

</html>