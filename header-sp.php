<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php bloginfo("name") ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo("template_url"); ?>/dist-sp/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo("template_url"); ?>/starter-template-sp.css" rel="stylesheet">
    <link href="<?php bloginfo("template_url"); ?>/sp_cmn-sp.css" rel="stylesheet">
    <link href="<?php bloginfo("template_url"); ?>/top-sp.css" rel="stylesheet">
    <link href="<?php bloginfo("template_url"); ?>/bk_all-sp.css" rel="stylesheet">
    <link href="<?php bloginfo("template_url"); ?>/detail-sp.css" rel="stylesheet">

    <link href="<?php bloginfo("template_url"); ?>/select_style-sp.css" rel="stylesheet">
    <link href="<?php bloginfo("template_url"); ?>/style-sp.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?php bloginfo("template_url"); ?>/assets-sp/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php bloginfo("template_url"); ?>/assets-sp/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <img src="<?php bloginfo("template_url"); ?>/dist-sp/img-sp/colapse.png" alt="">
        </button>

<?php /*
        <span class="fav">
            <a href="./">
<img src="<?php bloginfo("template_url"); ?>/dist-sp/img-sp/fav.png" alt="">
</a>
</span>

<?php */ ?>

          <a class="navbar-brand" href="<?php bloginfo("url"); ?>">
<img src="<?php bloginfo("template_url"); ?>/dist/img/logo.png" alt="">
          </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
            <li class="title_bar">マイメニュー</li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


