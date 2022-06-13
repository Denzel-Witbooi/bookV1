<!-- Output buffering -->
<!-- e.g Used when we use a function called header()
  to redirect
  It's in charge of buffering our repuests in the headers
  of the scripts so that way when we are done with the scripts
  it will send everything at the same time
 -->
<?php include "../includes/db/DBConn.php"; ?>
<?php include "functions.php" ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<?php

if (!isset($_SESSION['admin_role'])) {
    header("Location: ../index.php");
}else {


}

?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BookHub</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet">
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>

    <script src="http://tinymce.cachefly.net/4.1/tinymce.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>


</head>

<body>
