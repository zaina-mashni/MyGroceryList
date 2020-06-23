<?php
include "head.php";
$name = $_POST['itemAdded'];
$price = 0;
$email = $_SESSION['email'];
$query = "SELECT price FROM items WHERE name='$name'";
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $price = $row['price'];
}
$query = "SELECT * FROM cart WHERE name='$name' AND email='$email'";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) == 0) {
    $query = "INSERT INTO cart VALUES ('$name',1,$price,'$email')";
} else {
    $newAmount = 0;
    $newPrice = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $newAmount = $row['amount'] + 1;
        $newPrice = $price * $newAmount;
    }
    $query = "UPDATE cart SET price=$newPrice,amount=$newAmount WHERE name='$name' AND email='$email'";
}
$result = mysqli_query($con, $query);
header("Location: items.php");