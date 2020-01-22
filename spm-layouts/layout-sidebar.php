<?php
if( have_rows('sidebar') ):
    while ( have_rows('sidebar') ) : the_row();

        if( get_row_layout() == 'conversation' ):
            get_template_part( 'spm-modules/sidebar', 'conversation' );

        elseif( get_row_layout() == 'success' ):
            get_template_part( 'spm-modules/sidebar', 'stories' );

        elseif( get_row_layout() == 'team' ):
            get_template_part( 'spm-modules/sidebar', 'team' );

        endif;
    endwhile;
else :
    // no layouts found
endif;
?>
