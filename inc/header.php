<?php
   $filepath = realpath(dirname(__FILE__));
   include $filepath.'/../lib/Session.php';
   // include 'lib/Session.php';
   Session::init();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GetRoom</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css?ver=<?php echo time();?>">
  <link rel="stylesheet" href="assets/css/all.min.css?ver=<?php echo time();?>">
  <link rel="stylesheet" href="assets/css/chosen.min.css?ver=<?php echo time();?>">
  <link rel="stylesheet" href="assets/css/slick.css?ver=<?php echo time();?>">
  <link rel="stylesheet" href="assets/css/slick-theme.css?ver=<?php echo time();?>">
  <link rel="stylesheet" href="assets/css/jquery-ui.min.css?ver=<?php echo time();?>">
  <link rel="stylesheet" href="assets/css/jquery-ui.theme.min.css?ver=<?php echo time();?>">
  <link rel="stylesheet" href="assets/css/style.css?ver=<?php echo time();?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
  <!-- Font Awesome 5.15.1 CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
</head>
<body>
  <div class="main">
    <!-- Page Resubmission Off -->
    <script>
      if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
      }
    </script>
