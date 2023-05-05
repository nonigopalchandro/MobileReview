<!DOCTYPE html>
<html class='v2' dir='ltr' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?ver=1.3" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php wp_title(''); ?></title>
<?php wp_head(); ?>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800|Leckerli+One' rel='stylesheet' type='text/css'/>
<link href='//netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet'/>
<link type='text/css' rel='stylesheet' href='/wp-content/themes/MobilePriceBD_V1.0/custom.css' />
<?php get_template_part( 'liton' ); ?>

</head>


<body>
<header class='fixed-header32'>
<div class='menu-icons'>
<div class='MainMenuBarSearch'><i class='fa fa-search'></i></div>
<div class='LogoBuner'>
<div class='header section' id='header'><div class='widget Header' data-version='1' id='Header1'>
<div id='header-inner'>
<a href='http://mobilepricebd.info/' style='display: block'>
<img height='42px; ' id='Header1_headerimg' src='http://mobilepricebd.info/wp-content/themes/MobilePriceBD_V1.0/images/logo.png' style='display: block' width='150px; '/>
</a>
</div>
</div></div>
</div>
<div class='Clear'></div>
</div>
<!-- Nav -->
<nav class='nav_menu'>
<!-- Search -->
<div class='SearchContent'>
<div>
<form action='<?php bloginfo( 'home' ); ?>' id='SearchFRM' method='get'>
<p class='SearchAction'><span id='SearchAction'></span></p>
<p class='SearchWord'><input class='searchfield' id='sq' name="s" type="text" size="40" placeholder="What app are you looking for?" value="<?php the_search_query(); ?>"/>
</p>
<p class='SearchClose'><span class='fa fa-times' id='SearchClose'></span></p>
<div class='Clear'></div>
</form>
</div>
</div>
</nav>
</header>