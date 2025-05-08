<?php 
ob_start();
session_start();
include __DIR__."/../../config/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="uploads/favicon.png">

    <title>Admin Panel</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../dist-admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../dist-admin/css/font_awesome_5_free.min.css">
    <link rel="stylesheet" href="../../dist-admin/css/select2.min.css">
    <link rel="stylesheet" href="../../dist-admin/css/duotone-dark.css">
    <link rel="stylesheet" href="../../dist-admin/css/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="../../dist-admin/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../dist-admin/css/iziToast.min.css">
    <link rel="stylesheet" href="../../dist-admin/css/fontawesome-iconpicker.min.css">
    <link rel="stylesheet" href="../../dist-admin/css/bootstrap4-toggle.min.css">
    <link rel="stylesheet" href="../../dist-admin/css/style.css">
    <link rel="stylesheet" href="../../dist-admin/css/components.css">
    <link rel="stylesheet" href="../../dist-admin/css/air-datepicker.min.css">
    <link rel="stylesheet" href="../../dist-admin/css/spacing.css">
    <link rel="stylesheet" href="../../dist-admin/css/custom.css">

    <script src="../../dist-admin/js/jquery-3.7.0.min.js"></script>
    <script src="../../dist-admin/js/bootstrap.bundle.min.js"></script>
    <script src="../../dist-admin/js/popper.min.js"></script>
    <script src="../../dist-admin/js/tooltip.js"></script>
    <script src="../../dist-admin/js/jquery.nicescroll.min.js"></script>
    <script src="../../dist-admin/js/moment.min.js"></script>
    <script src="../../dist-admin/js/stisla.js"></script>
    <script src="../../dist-admin/js/jscolor.js"></script>
    <script src="../../dist-admin/js/bootstrap-tagsinput.min.js"></script>
    <script src="../../dist-admin/js/select2.full.min.js"></script>
    <script src="../../dist-admin/js/jquery.dataTables.min.js"></script>
    <script src="../../dist-admin/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../dist-admin/js/iziToast.min.js"></script>
    <script src="../../dist-admin/js/fontawesome-iconpicker.js"></script>
    <script src="../../dist-admin/js/air-datepicker.min.js"></script>
    <script src="../../dist-admin/tinymce/tinymce.min.js"></script>
    <script src="../../dist-admin/js/bootstrap4-toggle.min.js"></script>
</head>

<body>
<div id="app">
    <div class="main-wrapper">