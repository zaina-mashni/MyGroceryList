<html>

<head>
    <?php
include "head.php";
$email = $_SESSION['email'];
$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $username = $row['username'];
    $password = $row['password'];
    $gender = $row['gender'];
    $_SESSION["username"] = $row['username'];
    $_SESSION["password"] = $row['password'];
    $_SESSION['gender'] = $row['gender'];
}
if ($gender == "f") {
    $gender = "female";
} else {
    $gender = "male";
}

?>
</head>

<body>
    <?php include "navbar.php";?>
    <br><br><br>
    <div class="container">
        <img class="rounded profile-image-size" src="images/profile-picture.jpg" alt="profile" />
        <form action="updateProfile.php" method="POST">
            <fieldset class="form-group">
                <legend>Profile Information </legend>
                <div class="form-group">
                    <h4>Username: </h4>
                    <input class="form-control mx-sm-3" id="username" name="username" type="text" required
                        value="<?=$username?>">
                </div>
                <div class="form-group">
                    <h4>Email: </h4>
                    <input class="form-control mx-sm-3" id="email" name="email" type="email" value="<?=$email?>"
                        readonly>
                </div>
                <div class="form-group">
                    <h4>Password: </h4>
                    <input class="form-control mx-sm-3" id="password" name="password" type="text" required
                        value="<?=$password?>">
                </div>
                <div class="form-group">
                    <h4>Gender: </h4>
                    <input class="form-control mx-sm-3" id="gender" name="gender" type="text" value="<?=$gender?>"
                        readonly>
                </div>

                <button type="submit" class="btn btn-primary">Update Profile</button>
                <button type="reset" class="btn btn-secondary">Clear</button>
            </fieldset>
        </form>
    </div>
</body>

</html>