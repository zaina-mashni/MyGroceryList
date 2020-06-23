<?php
include "head.php";
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$gender = $gender[0];
$email = $_SESSION['email'];

$query = "UPDATE users SET username='$username',password='$password',gender='$gender' WHERE email='$email'";
$result = mysqli_query($con, $query);

header("Location: profile.php");