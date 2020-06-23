<?php
include "head.php";
$name = $_POST['itemRemoved'];
$price = 0;
$email = $_SESSION['email'];
$query = "DELETE FROM cart WHERE name='$name' AND email='$email'";
$result = mysqli_query($con, $query);
header("Location: cart.php");