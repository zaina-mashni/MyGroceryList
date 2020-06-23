<html>

<head>
    <title>Shopping Cart</title>
    <?php
include "head.php";
?>
    <link rel="stylesheet" href="table.css">
</head>

<body>
    <?php include "navbar.php";?>
    <br><br><br><br>
    <div class="container">
        <h2>Shopping Cart</h2>
        <br>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Item Name</th>
                    <th scope="col">Item Amount</th>
                    <th scope="col">Items Price</th>
                    <th scope="col">Edit Item</th>
                </tr>
            </thead>
            <tbody>
                <?php
$email = $_SESSION['email'];
$query = "SELECT * FROM cart WHERE email='$email'";
$result = mysqli_query($con, $query);
$flag = false;
if (mysqli_num_rows($result) == 0) {
    $flag = true;
    echo "<h5>Cart is empty.</h5> <br>";
}
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td scope='row'>$row[name]</td>
    <td>$row[amount]</td>
    <td>$row[price]JD</td>
    <td>
    <form method='POST' action='removeFromCart.php'>
    <input value='$row[name]'name='itemRemoved'style='display:none'>
    <input type='submit' value='Remove From Cart' class='btn btn-primary'>
    </form>
    </td>
    </tr>";
}
?>
                <tr>
                    <td>Total:</td>
                    <?php
$email = $_SESSION['email'];
$query = "SELECT SUM(price) AS 'price' FROM cart WHERE email='$email'";
$result = mysqli_query($con, $query);
$total = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $total = $row['price'];
}
if ($total == null) {
    $total = 0;
}
echo "<td> $total JD</td>";
?>
                    <td colspan="2">
                        <form action="checkout.php" method="POST">
                            <button class="btn btn-primary" type="submit" <?php if ($flag == true) {?> disabled
                                <?php }?>>Proceed to
                                checkout!</button>
                        </form>
                    </td>
                </tr>
            </tbody>

        </table>


    </div>
</body>

</html>