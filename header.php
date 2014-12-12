<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		
		<!-- dns prefetch -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		
		<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
			
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<!-- icons -->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/images/CDfavicon.png" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
			
		<!-- css + javascript -->
		<?php wp_head(); ?>
		
		<meta name="viewport" id="viewport" />
			<script type="text/javascript">
				if(Modernizr.mq("only screen and (max-device-width: 504px)")) 
					document.getElementById("viewport").setAttribute("content","width=504, initial-scale=0.635, maximum-scale=0.635");
				else if(Modernizr.mq("only screen and (max-device-width: 768px)")) 
					document.getElementById("viewport").setAttribute("content","width=768, initial-scale=1, maximum-scale=1");
			</script>
		
		<script>	
		!function(){
			// configure legacy, retina, touch requirements @ conditionizr.com
			conditionizr()
		}()
		</script>
		
		<?php if ( 'portfolio-item' == get_post_type() ) { ?>
			<script src="<?php echo get_stylesheet_directory_uri(); ?>/bxslider/jquery.bxslider.js"></script>
			<link href="<?php echo get_stylesheet_directory_uri(); ?>/bxslider/jquery.bxslider.css" rel="stylesheet" />

		<?php } ?>
		
	</head>
	<body <?php body_class(); ?>>
		<?php if ( 'portfolio-item' == get_post_type() ) {
			echo '<a href="';
			echo bloginfo("url");
			echo '"><div id="if-portfolio-item"></div></a>';
		} ?>
	
		<!-- wrapper -->
		<div class="wrapper">
	
			<!-- header -->
			<header class="header clear" role="banner">
				
				<!-- header content -->
					<div id="head-top">
						<a href="<?php bloginfo('url'); ?>">
							<div class="cdw-logo">&nbsp;</div>
						</a>
						<!-- nav -->
						<nav class="nav" role="navigation">
							<?php html5blank_nav(); ?>
						</nav>
						<!-- /nav -->
					</div>
									
					<div id="head-bottom">					
						<div class="title-widget">
							<?php if (is_page(Home)) {
								if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-home-title'));
							} else if ( 'portfolio-item' == get_post_type() ) {
								if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-home-title'));
							} else if (is_page(About)) {
								if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-about-title'));
							} else if (is_page(Clients)) {
								if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-clients-title'));
							} else if (is_page(Contact)) {
								if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-contact-title'));
							} ?>
						</div>
					</div>
				<!-- /header content -->
					

			
			</header>
			<!-- /header -->
			
		</div>
		<!-- /wrapper -->
		
		<div class="wrapper">