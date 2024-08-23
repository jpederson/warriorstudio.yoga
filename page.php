<?php

get_header();

// if this is a woocommerce page, we need the traditional WordPress loop
if ( is_woocommerce() || is_cart() || is_checkout() ):
    ?>

<div class="one-column-container pad-tall bg-white">
	<div class="wrap">
	<?php 
	if ( have_posts() ) :
		while ( have_posts() ) : the_post(); 
			?>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
			<?php
		endwhile;
	endif;
	?>
	</div>
</div>

    <?php
else:

    // if it's not in the store, we're using ACF components.
    the_components();

endif;

get_footer();

?>