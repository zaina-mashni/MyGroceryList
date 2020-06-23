<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><i class="fas fa-shopping-basket"></i> Tarkari</a>
    <div class="navbar-collapse collapse w-100 dual-collapse2">
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="items.php">Items</a>
            </li>
            <?php if (!empty($_SESSION["email"])) {?>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="order.php">Orders</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> Cart</a>
            </li>
            <?php }?>
        </ul>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <?php if (empty($_SESSION["email"])) {?>
            <li class="nav-item">
                <a class="nav-link" href="register.php"><i class="fas fa-user-plus"></i> Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php"> <i class="fas fa-user"></i> Login</a>
            </li>
            <?php } else {?>
            <li class="nav-item">
                <a class="nav-link" href="profile.php"><i class="fas fa-user-circle"></i> Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
            <?php }?>
        </ul>
    </div>
</nav>