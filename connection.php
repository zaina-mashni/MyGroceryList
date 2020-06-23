<?php
$con = mysqli_connect('localhost', 'root', '', 'MyGroceryList');
if (!$con) {
    die("Connection failed: " . mysqli_error($con));
}