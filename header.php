<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all">
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js" type="text/javascript"></script>

<?php wp_head(); ?>

</head>

<body 
	<?php body_class(); ?>
>

<header id="masthead" class="site-header">
	<div id="metaNav">
		<div class="wrapper">
		<?php wp_nav_menu( array( 'theme_location' => 'meta' ) ); ?>
		</div>
	</div>
	<div class="wrapper">
	<div id="brand">
		<?php
		if ( function_exists( 'the_custom_logo' ) ) {
				
			the_custom_logo();
			
			if(get_theme_mod( 'custom_logo' )){

			}else{
				echo("<a href=\"".esc_url( home_url( '/' ) )."\" title=\"".esc_attr( get_bloginfo( 'name', 'display' ) )."\" rel=\"home\"><img width=\"600\" height=\"180\" src=\"".get_template_directory_uri()."/assets/images/SLRG-Logo_".get_theme_mod( 'slrg_radio_setting_id').".png\" class=\"custom-logo\" alt=\"SLRG\"></a>");
			}

		}
		?>
	</div>
		
	<div class="header-right-wrapper">
			<a href="#" id="nav-toggle"><?php esc_html_e('Menu', 'slrg'); ?><span></span></a>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<ul class="nav-menu">
					<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => '', 'items_wrap' => '%3$s')); ?>
				</ul>
			</nav>
			<!-- #site-navigation -->
	</div>
		

	</div>
</header>

<main class="main-fluid">
