<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simple-rtcamp
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/flexSlider/flexslider.css" type="text/css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/flexSlider/jquery.flexslider-min.js"></script>
	<script type="text/javascript">(function($) {
	    $(window).load(function() {
	        $('#slider .flexslider').flexslider({
	               animation: 'slide',
	                slideshowSpeed: 9000,
	                animationSpeed: 900,
	                pauseOnAction: true,
	                pauseOnHover: true,
	                controlNav: false,
	                directionNav: true, 
	                controlsContainer: ".flexslider",
	        });
	    });
	})(jQuery)</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div id="content" class="container">
		<header id="masthead" class="site-header">
			
			<!-- <h1><a href="<?php echo home_url(); ?>"> <?php bloginfo('name'); ?> </a></h1>
			<h5><?php bloginfo('description') ?></h5> -->
			

		<!-- <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'simple-rtcamp' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav> --><!-- #site-navigation -->
				<div class="row" style="width: auto;">
					<div class="col-sm-4">
						<?php the_custom_logo();?>
					</div>
					<div class="col-sm-8">
						<nav class="site-nav" >
							<?php wp_nav_menu(); ?>
						</nav>
					</div>
				</div>
			
		</header><!-- #masthead -->
		<section id="slider">
	      <div class="flexslider">
	        <ul class="slides">
	        <?php query_posts(array('orderby' => 'rand')); if(have_posts()) : while(have_posts()) : the_post();?>
	            <li class="slide">
	            <?php the_title(); ?>
	            <?php the_excerpt(); ?>
	            <?php the_post_thumbnail(); ?>
	          </li>
	        <?php endwhile; endif; wp_reset_query(); ?>
	        </ul>
	    </div>
	</section>
	</div>
	<div id="content" class="container">
