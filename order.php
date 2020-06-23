<html>

<head>
    <?php
include "head.php";
?>
    <link rel="stylesheet" href="table.css">
</head>

<body>
    <?php include "navbar.php";?>
    <br><br><br><br>
    <div class="container">
        <h2>Previous Orders</h2>
        <br>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Order Id</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Date Ordered</th>
                </tr>
            </thead>
            <tbody>
                <?php
$email = $_SESSION['email'];
$query = "SELECT * FROM pastorders WHERE email='$email'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) == 0) {
    echo "<h5>No Previous Orders.</h5> <br>";
}
while ($row = mysqli_fetch_assoc($result)) {
    $date = $row['orderDate'];
    //$date = date("Y-m-d h:i:sa", $date);
    echo "<tr>
    <td scope='row'>$row[orderId]</td>
    <td>$row[totalPrice]JD</td>
    <td>$date</td>
    </tr>";
}
?>
            </tbody>

        </table>

    </div>
</body>

</html>