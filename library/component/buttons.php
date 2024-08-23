<?php

if ( have_rows( 'buttons' ) ) {
    ?>
    <div class="buttons">
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
    <?php 
}

