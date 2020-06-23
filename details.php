<html>

<head>
    <title>Item - Details</title>
    <?php include "head.php";
if (isset($_POST) && !empty($_POST)) {
    $name = $_POST["item"];
    $image = "";
    $description = "";
    $price = 0;
    $category = "";
    $detailedDescription = "";
    $loggedin = false;
    $query = "SELECT * FROM items WHERE name='$name'";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        if (!empty($_SESSION["email"])) {
            $loggedin = true;
        }
        $image = $row["image"];
        $description = $row["description"];
        $price = $row["price"];
        $category = $row["category"];
        $detailedDescription = $row["detailedDescription"];
    }
}
?>
</head>

<body>
    <?php include "navbar.php";?>
    <br><br><br><br>
    <div class="container">
        <div class="detail-border">
            <div class="media">
                <img src="images/<?=$image?>" class="align-self-center mr-3 detail-img" alt="<?=$description?>">
                <div class="media-body">
                    <h2 class="mt-0"><?=$name?></h2>
                    <hr>
                    <p><?=$description?></p>
                    <p>Price: <?=$price?> JD</p>
                    <p class="mb-0"><?=$detailedDescription?></p>
                    <hr>
                    <form method='POST' action='addtocart.php'>
                        <input value='<?=$name?>' name='itemAdded' style='display:none'>
                        <button class="btn btn-primary" <?php if ($loggedin == false) {?> disabled <?php }?>>Add to
                            Cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>