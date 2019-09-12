<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simple-rtcamp
 */

?>
<footer class="site-footer" >
	<nav class="site-nav" >
		<?php wp_nav_menu(); ?>	
	</nav>
</footer>

	<!-- <footer id="colophon" class="site-footer">
		<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?> </p>
	</footer> -->
	<!-- #colophon -->
</div><!-- #container -->

<?php wp_footer(); ?>

</body>
</html>
