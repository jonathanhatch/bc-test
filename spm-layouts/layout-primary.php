<?php
// check if the flexible content field has rows of data
if( have_rows('primary_fields') ):

     // loop through the rows of data
    while ( have_rows('primary_fields') ) : the_row();

        if( get_row_layout() == 'hero' ):

            get_template_part( 'spm-modules/content', 'hero' );

        elseif( get_row_layout() == 'single_cta' ):

            get_template_part( 'spm-modules/content', 'single-cta' );

        elseif( get_row_layout() == 'basic' ):

            get_template_part( 'spm-modules/content', 'basic' );

        elseif( get_row_layout() == 'cta_drop' ):

            get_template_part( 'spm-modules/content', 'cta-drop' );

        elseif( get_row_layout() == 'success' ):

            get_template_part( 'spm-modules/content', 'success' );

        elseif( get_row_layout() == 'cta_buttons' ):

            get_template_part( 'spm-modules/content', 'cta-buttons' );

        elseif( get_row_layout() == 'video' ):

            get_template_part( 'spm-modules/content', 'video' );

        elseif( get_row_layout() == 'team_feed' ):

            get_template_part( 'spm-modules/content', 'team-feed' );

        elseif( get_row_layout() == 'blocks' ):

            get_template_part( 'spm-modules/content', 'blocks' );

        elseif( get_row_layout() == 'lending' ):

            get_template_part( 'spm-modules/content', 'lending' );

        elseif( get_row_layout() == 'locations' ):

            get_template_part( 'spm-modules/content', 'locations' );

        elseif( get_row_layout() == 'contact' ):

            get_template_part( 'spm-modules/content', 'contact' );

        endif;

    endwhile;

else :

    // no layouts found

endif;

?>
