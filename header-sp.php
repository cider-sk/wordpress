<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
<meta name="viewport" content="width=420" />
    <link rel="icon" href="../../favicon.ico">

    <title><?php bloginfo("name") ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo("template_url"); ?>/dist-sp/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo("template_url"); ?>/dist/css/flexslider.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="<?php bloginfo("template_url"); ?>/starter-template-sp.css" rel="stylesheet">
    <link href="<?php bloginfo("template_url"); ?>/sp_cmn-sp.css" rel="stylesheet">
    <link href="<?php bloginfo("template_url"); ?>/top-sp.css" rel="stylesheet">
    <link href="<?php bloginfo("template_url"); ?>/bk_all-sp.css" rel="stylesheet">
    <link href="<?php bloginfo("template_url"); ?>/detail-sp.css" rel="stylesheet">

    <link href="<?php bloginfo("template_url"); ?>/select_style-sp.css" rel="stylesheet">
    <link href="<?php bloginfo("template_url"); ?>/style-sp.css" rel="stylesheet">
    <link href="<?php bloginfo("template_url"); ?>/shop_search_sp.css" rel="stylesheet">

    <link href="<?php bloginfo("template_url"); ?>/shop_detail_goo.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?php bloginfo("template_url"); ?>/assets-sp/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php bloginfo("template_url"); ?>/assets-sp/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-68277995-1', 'auto');
  ga('send', 'pageview');
  </script>
<?php wp_head(); ?>
  </head>

      <body <?php body_class(); ?>>

    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <img src="<?php bloginfo("template_url"); ?>/dist-sp/img-sp/menu-icon.png" alt="">
            </button>
            <button type="button" class="navbar-toggle collapsed">
                <img src="<?php bloginfo("template_url"); ?>/dist-sp/img-sp/like-icon.png" alt="">
            </button>

<?php /*
        <span class="fav">
            <a href="./">
<img src="<?php bloginfo("template_url"); ?>/dist-sp/img-sp/fav.png" alt="">
</a>
</span>

<?php */ ?>

          <a class="navbar-brand" href="<?php bloginfo("url"); ?>"  style="
    width: 283px;
    position: absolute;
    top: 10px;
">
<img src="<?php bloginfo("template_url"); ?>/dist-sp/img-sp/logo-sp.png" alt="">
          </a>
        </div>
	<div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
            <li class="title_bar">メニュー</li>
            <li><a href="<?php bloginfo("url") ?>?s=">中古車検索</a></li>
            <li><a href="<?php bloginfo("url"); ?>/toriyose/">中古車資料一括問い合わせ</a></li>
<li><a href="<?php bloginfo("url"); ?>/shop/">中古車販売店</a></li>
            <li class="active"><a href="<?php bloginfo("url"); ?>/abouttsukucar/">ツクカーとは</a></li>
            <li><a href="<?php bloginfo("url"); ?>/buy/">車購入の流れ</a></li>
	    <li><a href="<?php bloginfo("url"); ?>/buy/">豪華三大特典</a></li>
 <li><a href="<?php bloginfo("url"); ?>/kaitori/">車買取</a></li>
 <li><a href="<?php bloginfo("url"); ?>/blog/">ツクカーBLOG</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
