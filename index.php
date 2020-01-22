<?php get_header(); ?>
<div id="content" class="site-content">
    <div class="container">
            <div id="secondary" class="col-sm-12 col-md-4">
            <h3>Secondary Navigation</h3>
            </div>
            <div id="primary" class="content-area col-sm-12 col-md-8">

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                            <div class="entry-content">
                                <div>
                                    <?php the_content(); ?>
                                </div>
                            </div><!-- .entry-content -->

                    <?php endwhile; else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>

            </div><!-- #primary -->
    </div><!-- .container-fluid -->
</div><!-- #content -->
<?php get_footer(); ?>