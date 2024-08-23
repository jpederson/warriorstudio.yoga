<?php

$title = get_sub_field( 'title' );
$color = get_sub_field( 'color' );

if ( have_rows( 'buttons' ) ) {
    ?>
    <div class="cta bg-<?php print $color; ?>">
        <div class="wrap">
        <?php 
        while ( have_rows( 'buttons' ) ) : the_row();
            $label = get_sub_field( 'label' );
            $link = get_sub_field( 'link' );
            $color = get_sub_field( 'color' );

            if ( !empty( $label ) && !empty( $link ) ) {
                // variable for this button
                print '<a href="' . $link . '" class="btn ' . $color . '">' . $label . '</a>';
            }
        endwhile;
        ?>
        </div>
    </div>
    <?php 
}

