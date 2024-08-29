<?php

$padding = get_sub_field( 'padding' );
$color = get_sub_field( 'color' );

if ( have_rows( 'column' ) ) :
    ?>
    <div class="pricing-container bg-white <?php print $padding ?> bg-<?php print $color ?>">
        <div class="wrap">
            <div class="pricing-inner">
            <?php 
            while ( have_rows( 'column' ) ) : the_row();
                
                $title = get_sub_field( 'title' );
                $price = get_sub_field( 'price' );
                $price_discount = get_sub_field( 'price_discount' );
                $button_text = get_sub_field( 'button_text' );
                $button_link = get_sub_field( 'button_link' );
                $button_color = get_sub_field( 'button_color' );
                $description = get_sub_field( 'description' );

                ?>
                <div class="column">
                    <h3><?php print $title; ?></h3>
                    <div class="price-container">
                        <div class="price">
                            <?php 
                            print $price;
                            if ( !empty( $price_discount ) ) : ?><span><?php print $price_discount ?>*</span><?php endif; ?>
                        </div>
                    </div>
                    <div class="price-description">
                        <?php print $description; ?>
                    </div>
                    <?php if ( !empty( $price_discount ) ) : ?><div class="discount-note">* veterans & 60+ only</div><?php endif; ?>
                    <?php if ( !empty( $button_text ) && !empty( $button_link ) && !empty( $button_color ) ) : ?>
                    <a href="<?php print $button_link ?>" class="btn <?php print $button_color; ?>"><?php print $button_text ?></a>
                    <?php endif; ?>
                </div>
                <?php
                
            endwhile; 
            ?>
            </div>
        </div>
    </div>
    <?php
endif;

