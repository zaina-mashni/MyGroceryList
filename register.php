<html>

<head>
    <title>Register</title>
    <?php include "head.php";?>
    <script type="text/javascript" src="js/register.js"></script>
</head>

<body>
    <?php include "navbar.php";
$username = '';
$password = '';
$email = '';
$gender = '';
if (isset($_POST) && !empty($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $query = "INSERT INTO users VALUES ('$username','$password','$email','$gender');";
    $result = mysqli_query($con, $query);
    if (!$result) {
        $error = mysqli_error($con);
        echo "<br><br><p style='text-align:center; font-weight:bold'>Registration failed. Email already exists.</p>";
    } else {
        echo "<br><br><p style='text-align:center; font-weight:bold'>You registered successfully! You can now login to your account.</p>";
    }
}
?>
    <br><br><br>
    <div class="container">
        <form method="POST" action="#" onsubmit="return registerForm()">
            <fieldset class="form-group">
                <legend>Register </legend>
                <div class="form-group">
                    <label for="username">Username: </label>
                    <input class="form-control mx-sm-3" id="username" name="username" type="text" required>
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input class="form-control mx-sm-3" id="email" name="email" type="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password: </label>
                    <input class="form-control mx-sm-3" id="password" name="password" type="password" required>
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password: </label>
                    <input class="form-control mx-sm-3" id="confirmPassword" name="confirmPassword" type="password"
                        required>
                </div>
                <div class="form-group">
                    <label>Gender: </label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gender" value="m" checked>
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gender" value="f">
                            Female
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                <button type="reset" class="btn btn-secondary">Clear</button>
            </fieldset>
        </form>
    </div>
</body>

</html>