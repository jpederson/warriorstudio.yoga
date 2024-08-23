<?php

$color = get_sub_field( 'color' );
$padding = get_sub_field( 'padding' );
$width = get_sub_field( 'width' );

if ( have_rows( 'content' ) ):
    ?>
    <div class="one-column-container <?php print $padding; ?> bg-<?php print $color; ?>">
        <div class="wrap <?php print $width; ?>">
            <?php 
            if ( have_rows( 'content' ) ) : 
                while ( have_rows( 'content' ) ) : the_row();
                    // include the specific layout
                    get_template_part( 'library/component/' . get_row_layout() );
                endwhile; 
            endif;
            ?>
        </div>
    </div>
    <?php 
endif;

