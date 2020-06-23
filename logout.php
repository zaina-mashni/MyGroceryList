<?php
if (isset($_COOKIE['CURRENT_SID'])) {
    $_currentSessionId = $_COOKIE['CURRENT_SID'];
    session_id($_currentSessionId);
    session_start();
    session_destroy();
}
header("Location: index.php");
die();