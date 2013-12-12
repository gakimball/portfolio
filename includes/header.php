<?php

$base = __DIR__.'/..';

require $base.'/vendor/autoload.php';
Dotenv::load($base);

require $base.'/lib/twitter.php';
require $base.'/lib/lastfm.php';
require $base.'/lib/github.php';

?>
<!doctype html>
<html class="no-js" lang="en">

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Geoff Kimball — web + mobile designer</title>

  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,300italic,400italic,600italic' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="stylesheet" href="css/style.css" />

</head>

<body>
  
  <header class="header">
    <div class="header-inner">
      <h1 class="logo"><a href="index.php">Geoff Kimball</a></h1>
      <span class="logo-after">web + mobile designer</span>

      <div class="header-contact">
        <a href="mailto:gakimball@bsu.edu" class="email ss-mail">Email</a>
        <a href="http://twitter.com/geoffkimball" class="twitter ss-twitter" target="_blank">Twitter</a>
      </div>
    </div>
  </header>