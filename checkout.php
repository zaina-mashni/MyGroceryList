<?php
include "head.php";
$price = 0;
$email = $_SESSION['email'];
$query = "SELECT SUM(price) AS 'price' FROM cart WHERE email='$email'";
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $price = $row['price'];
}
$query = "INSERT INTO pastorders VALUES (DEFAULT,$price,'$email',CURDATE())";
$result = mysqli_query($con, $query);
$query = "DELETE FROM cart WHERE email='$email'";
$result = mysqli_query($con, $query);
header("Location: order.php");