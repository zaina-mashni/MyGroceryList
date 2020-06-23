<html>

<head>
    <title>Login</title>
    <?php include "head.php";?>
</head>

<body>
    <?php include "navbar.php";
if (isset($_POST) && !empty($_POST)) {
    session_start();
    $_currentSessionId = session_id();
    $expire = time() + (86400 * 30);
    setcookie('CURRENT_SID', $_currentSessionId, $expire);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password';";
    $result = mysqli_query($con, $query);
    if (!$result) {
        $error = mysqli_error($con);
        echo "<br><br><p style='text-align:center; font-weight:bold'>Login failed. $error</p>";
    } else if (mysqli_num_rows($result) == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION["username"] = $row['username'];
            $_SESSION["password"] = $row['password'];
            $_SESSION["email"] = $row['email'];
            $_SESSION['gender'] = $row['gender'];
        }
        ?>
    <script>
    alert("Successfull login!");
    window.location.href = "index.php";
    </script>
    <?php
} else {
        echo "<br><br><p style='text-align:center; font-weight:bold'>Wrong email or password.</p>";
    }
    $_POST = array();
}
?>
    <br><br><br>
    <div class="container">
        <form method="POST" action="#">
            <fieldset class="form-group">
                <legend>Login </legend>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input class="form-control mx-sm-3" id="email" name="email" type="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password: </label>
                    <input class="form-control mx-sm-3" id="password" name="password" type="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <button type="reset" class="btn btn-secondary">Clear</button>
            </fieldset>
        </form>
    </div>

</body>

</html>