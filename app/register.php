<?php

include 'db.php';

$message="";

if(isset($_POST['submit'])){

$name=$_POST['name'];

$reg=$_POST['reg'];

$email=$_POST['email'];

$course=$_POST['course'];

$sql="INSERT INTO students(student_name,reg_no,email,course)
VALUES('$name','$reg','$email','$course')";

if($conn->query($sql)==TRUE){

$message="Student Registered Successfully.";

}else{

$message="Registration Failed.";

}

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Register Student</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h2>Register Student</h2>

<form method="POST">

<input type="text" name="name" placeholder="Student Name" required>

<input type="text" name="reg" placeholder="Registration Number" required>

<input type="email" name="email" placeholder="Email" required>

<input type="text" name="course" placeholder="Course" required>

<input type="submit" name="submit" value="Register">

</form>

<p><?php echo $message; ?></p>

<a href="index.php">Home</a>

</div>

</body>

</html>