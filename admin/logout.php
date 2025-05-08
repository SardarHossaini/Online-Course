<?php

require __DIR__."/layouts/header.php";
unset($_SESSION['admin']);
header('location:login.php');
exit;