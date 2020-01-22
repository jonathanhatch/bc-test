<?php get_header(); ?>

<section id="page-wrapper" role="document" aria-labelledby="page-title" aria-describedby="content">
        
        <header class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 id="page-title"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </header><!-- #page-header -->

        <div class="container">
            <div class="row">
                <nav role="navigation" aria-label="Pages in <?php the_title(); ?>" class="page-nav col-12 col-xl-3">
                    <ul>
                        <?php
                        wp_list_pages( array(
                            'child_of' => $post->ID,
                            'title_li' => '',
                            'sort_column' => 'post_parent',
                            'depth' => 2,

                        ) );
                        ?>
                    </ul>
                </nav>
                <main id="content" role="main" class="page-content col-12 col-lg-7 col-xl-6">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; else : ?>
                        <p><?php _e( 'Sorry, nothing matched your query.' ); ?></p>
                    <?php endif; ?>
                </main>
                <aside role="complementary" class="page-sidebar col-12 col-lg-4 offset-lg-1 col-xl-3">
                    <?php get_template_part( 'spm-layouts/layout', 'secondary' ); ?>
                </aside> 
            </div>
        </div>

        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <?php get_template_part( 'spm-layouts/layout', 'below' ); ?>
                </div>
            </div>
        </footer><!-- #page-footer -->

</section>
<?php get_footer(); ?>