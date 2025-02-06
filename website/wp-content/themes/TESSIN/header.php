<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicon.ico">
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicon.ico" type="image/vnd.microsoft.icon" /> 
  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <meta property="og:title" content="TESSIN" />
  <meta property="og:type"  content="article" />
  <meta property="og:url"   content="tessin.com.mx" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css" media="screen" /> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/main.css">  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>
	
<body>
  <header>
	  <div class="container-fluid">
      <div class="row">
        <div class="col-6 col-md-2 d-flex align-items-center">            
		   		<a href="<?php bloginfo('url'); ?>" title="Home">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" class="logo" width="327" height="40" title="TESSIN" alt="TESSIN">
          </a> 
        </div>
        <div class="col-6 col-md-10 header-navigation">
          <div class="hamburger icon-menu show-md"></div>
          <div class="navigation">
            <nav class="hide-md">
              <?php wp_nav_menu(array('theme_location'=>'header-menu','container'=>false,'menu_class'=>'')); ?>
              
            </nav>
          </div>
          <div class="navigation">ENG</div>
          <div class="navigation">p</div>
          <div class="navigation">
            <a href="mailto:info@tessin.com.mx" class="btn">Contact Us <i class="bi bi-arrow-right-short"></i></a>
          </div>  
        </div> 
      </div>  
	  </div>
     
    <div id="mobile-menu">
      <div class="close-menu icon-close"></div>
      <nav>
        <?php wp_nav_menu(array('theme_location'=>'mobile-menu','container'=>false,'menu_class'=>'')); ?>
      </nav>
      <div class="right">

      </div>   
    </div>     
  </header>