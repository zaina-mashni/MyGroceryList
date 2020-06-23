<html>

<head>
    <title>Customer Support</title>
    <?php include "head.php";
$loggedin = true;
if (empty($_SESSION['email'])) {
    $loggedin = false;
} else {
    $email = $_SESSION['email'];
}
if (isset($_POST) && !empty($_POST)) {
    $rating = $_POST["rating"];
    $text = "feedback: " . $_POST["feedback"] . "\nquestions: " . $_POST["question"] . "\ncomments: " . $_POST["add"];
    $query = "INSERT INTO support VALUES (DEFAULT,'$email',$rating,'$text')";
    $result = mysqli_query($con, $query);
    ?>
    <script>
    alert("Thank you for getting in touch!")
    </script>
    <?php }?>
</head>

<body>
    <?php include "navbar.php";?>
    <br><br><br>
    <div class="container">
        <form method="POST" action="#">
            <fieldset class="form-group">
                <legend>Contact Us </legend>
                <div class="form-group">
                    <label for="feedback">Feedback: </label>
                    <textarea class="form-control" id="feedback" name="feedback" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="question">Questions: </label>
                    <textarea class="form-control" id="question" name="question" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="add">Additional Comments: </label>
                    <textarea class="form-control" id="add" name="add" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="rating">Rating: </label>
                    <input class="form-control" id="rating" name="rating" type="range" step="1" min="1" max="5"></input>
                </div>
                <button type="submit" class="btn btn-primary" <?php if ($loggedin == false) {?> disabled
                    <?php }?>>Submit</button>
                <button type="reset" class="btn btn-secondary">Clear</button>
            </fieldset>
        </form>
    </div>
</body>

</html>