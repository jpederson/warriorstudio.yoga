<?php


$title = get_sub_field( 'title' );
$subtitle = get_sub_field( 'subtitle' );
$color = get_sub_field( 'color' );


// all we need is a title
if ( !empty( $title ) ) {
    ?>
<div class="page-header bg-<?php print $color; ?>">
    <div class="wrap">
        <h1 class="page-title"><?php print $title; ?></h1>
        <?php if ( !empty( $subtitle ) ) { ?><h4 class="page-subtitle"><?php print $subtitle; ?></h4><?php } ?>
    </div>
</div>
    <?php
}

