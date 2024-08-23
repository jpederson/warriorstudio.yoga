<?php
/*
Template Name: Legacy WordPress
*/

get_header();

?>
<div class="one-column-container pad-tall bg-white">
    <div class="wrap">
<?php
if ( have_posts() ):
	while ( have_posts() ): the_post(); 
		the_content();
	endwhile; // end while
endif; // end if
?>
	</div>
</div>
<?php
get_footer();

