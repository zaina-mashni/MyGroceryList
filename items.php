<html>

<head>
    <?php
include "head.php";
?>
</head>

<body>
    <?php
include_once "navbar.php";
?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Tarkari Organic Grocery Store</h1>
            <p class="lead">Your One-Stop Shop for All Your Organic Food Needs!</p>
        </div>
    </div>
    <br>
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle btn-right" type="button" id="categories" data-toggle="dropdown">
            Categories
        </button>
        <div class="dropdown-menu" aria-labelledby="categories">
            <a class="dropdown-item" href="items.php?category=all">All</a>
            <a class="dropdown-item" href="items.php?category=fruit">Fruits</a>
            <a class="dropdown-item" href="items.php?category=vegetable">Vegetables</a>
            <a class="dropdown-item" href="items.php?category=snack">Snacks</a>
            <a class="dropdown-item" href="items.php?category=frozen">Frozen</a>
        </div>
    </div>

    <div class="container">
        <?php

$category = 'all';
if (isset($_GET['category'])) {
    $category = $_GET['category'];
}

$query = '';
if ($category == 'all') {
    $query = "SELECT * FROM items";

} else {
    $query = "SELECT * FROM items WHERE category='$category'";

}
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) == 0) {
    echo "<div class='row'>
    <h3>No items to show.</h3>
    </div>";
} else {
    echo "<div class='row'>";
    while ($row = mysqli_fetch_assoc($result)) {
        if (empty($_SESSION["email"])) {
            echo "<div class='col-sm-3'>
            <div class='card' style='width: 18rem;'>
            <form method='POST' action='details.php'>
            <input value='$row[name]' name='item' style='display:none'>
            <button class='hidden-btn' type='submit' ><img class='card-img-top' src='images/$row[image]' alt='$row[description]'></button>
            </form>
            <div class='card-body'>
              <h5 class='card-title'>$row[name]</h5>
              <p class='card-text'>$row[description]</p>
              <p class='card-text'>$row[price]JD</p>
            </div>
          </div>
          </div>
          <div class='col-sm-1'></div>";
        } else {
            echo "<div class='col-sm-3'>
            <div class='card' style='width: 18rem;'>
            <form method='POST' action='details.php'>
            <input value='$row[name]' name='item' style='display:none'>
            <button class='hidden-btn' type='submit' ><img class='card-img-top' src='images/$row[image]' alt='$row[description]'></button>
            </form>
            <div class='card-body'>
              <h5 class='card-title'>$row[name]</h5>
              <p class='card-text'>$row[description]</p>
              <p class='card-text'>$row[price]JD</p>
              <form method='POST' action='addtocart.php'>
              <input value='$row[name]' name='itemAdded' style='display:none'>
              <input type='submit' value='Add to Cart' class='btn btn-primary'>
              </form>
            </div>
          </div>
          </div>
          <div class='col-sm-1'></div>";
        }
    }
    echo "</div";
}
?>

    </div>
</body>

</html>
