<?php
/**
 * The Template for displaying all single posts
 */

get_header();

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

get_footer();

