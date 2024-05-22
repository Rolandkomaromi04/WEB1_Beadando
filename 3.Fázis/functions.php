<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function is_logged_in() {
    return isset($_SESSION['username']);
}


function logout() {
    $_SESSION = array();

    session_destroy();
}
?>
