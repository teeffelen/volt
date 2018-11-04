<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Page Information -->
  <title><?php
      if (isset($data['title'])) { echo $data['title']." - ".SITE_NAME; }
      else { echo SITE_NAME; }
  ?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Icons & Favicon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="<?=URL_ROOT?>/assets/img/favicon.png">

  <!-- Bootstrap & Custom CSS -->
  <link rel="stylesheet" href="<?=URL_ROOT?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=URL_ROOT?>/assets/css/volt.css">

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
<?php require('navbar.php'); ?>
