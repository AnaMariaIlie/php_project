<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_COOKIE['user']);
session_destroy();
exit;
?>