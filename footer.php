<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
$admin_email = get_option( 'admin_email' );
?>
	
	</section>
	
	<footer class="footer bg-sky">
		<div class="wrap">
			<div class="logo"><img src="<?php bloginfo( 'template_url' ); ?>/img/logo-black.svg"></div>
			<div class="content">
				<?php the_field( 'address', 'option' ); ?>
			</div>
			<div class="social">
				<?php if ( have_rows( 'social', 'option' ) ) : 
					while ( have_rows( 'social', 'option' ) ) : the_row();
						?>
				<a href="<?php print get_sub_field( 'link' ); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/img/social-<?php print get_sub_field( 'network' ); ?>.svg" alt="<?php print get_sub_field( 'network' ); ?>" /></a>
						<?php
					endwhile;
				endif; ?>
			</div>
		</div>
	</footer>

	<div class="copyright bg-white">
		<p>Copyright &copy; <?php print date( 'Y' ) . ' ' . get_bloginfo( 'site_name' ) . '.'; ?> </p>
	</div>

</div><!-- #container -->

<?php wp_footer(); ?>
</body>
</html>