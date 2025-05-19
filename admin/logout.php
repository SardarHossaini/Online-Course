<?php

require __DIR__."/layouts/header.php";
unset($_SESSION['admin']);
$_SESSION['success_message']="You are logged out successfully";
header('location:login.php');
exit;