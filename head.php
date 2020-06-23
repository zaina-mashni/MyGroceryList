<!-- Fontawesome CSS -->
<link href="styles\all.css" rel="stylesheet">
<link rel="stylesheet" href="styles/general.css">
<!-- Custom styles for this template -->
<link href="vendor\bootstrap\css\bootstrap.min.css" rel="stylesheet">
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="icon" href="images/logo.jpg">
<?php
include_once "connection.php";
if (!empty($_COOKIE['CURRENT_SID']) && isset($_COOKIE['CURRENT_SID'])) {
    $_currentSessionId = $_COOKIE['CURRENT_SID'];
    session_id($_currentSessionId);
    session_start();
}
?>