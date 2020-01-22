<?php
// check if the flexible content field has rows of data
if( have_rows('sidebar') ):

     // loop through the rows of data
    while ( have_rows('sidebar') ) : the_row();

        if( get_row_layout() == 'sidebar_cta' ):

            get_template_part( 'spm-modules/sidebar', 'cta' );

        elseif( get_row_layout() == 'sidebar_post' ): 

            get_template_part( 'spm-modules/sidebar', 'blog-post' );


        endif;

    endwhile;

else :

    // no layouts found

endif;

?>