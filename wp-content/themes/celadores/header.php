<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php 

	if (is_home () )
	{
	 bloginfo('name');
	}
	elseif ( is_category() )
	{
	 single_cat_title();
	 echo " ? ";
	 bloginfo('name');
	}
	elseif (is_single() || is_page() )
	{
	 single_post_title();
	}
	elseif (is_search() )
	{
	 bloginfo('name');
	 echo " search results; ";
	 echo wp_specialchars($s);
	}
	else
	{
	 wp_title("",true);
	}
	?> | Celadores </title>
	

   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" title="estilo" type="text/css" media="screen" charset="utf-8">

       <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  		
	<?php wp_head(); ?>
  </head>

  <body>
	  <div class="carga">
	  	<div class="logo-carga"><img src="<?php bloginfo('template_url'); ?>/img/celadores.svg"></div>  	
	  </div>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="<?php bloginfo('template_url'); ?>/img/celadores.svg" alt="celadores" height="40">
</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><?php wp_list_pages('title_li')?></li>

      </ul>
      
            <ul class="nav navbar-nav navbar-right">
            <li><a href="https://www.facebook.com/celadoresrecs" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/celadoresrecs" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://instagram.com/celadoresrecs" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://soundcloud.com/celadoresrecs" target="_blank"><i class="fa fa-soundcloud"></i></a></li>

            </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="contacto"></div>