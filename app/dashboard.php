<?php

session_start();

if(!isset($_SESSION['student'])){

header("Location: login.php");

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Dashboard</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h2>Welcome</h2>

<p>You are successfully logged in.</p>

<p>Registration Number:
<strong>

<?php echo $_SESSION['student']; ?>

</strong>

</p>

<a class="button" href="logout.php">Logout</a>

</div>

</body>

</html>