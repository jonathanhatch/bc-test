<?php get_header(); ?>
	<header class="page-header">
		<div class="container">
			<div class="row">
				<div class="page-title col-12">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
    </header><!-- #page-header -->
	<div id="primary" class="content-area container">
		<main id="content" role="main" class="page-content row">
			
					<?php if(get_field('video_link')) : ?>
					<div class="col-12">
						<div class="embed-container">
							<?php the_field('video_link'); ?>
						</div>
					</div>
					<?php else : ?>
					<div class="col-12 col-md-5">
						<?php the_post_thumbnail(); ?>
					</div>
					<?php endif; ?>
				
			<div class="col-12 col-md-7">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, nothing matched your query.' ); ?></p>
				<?php endif; ?>
			</div>
        </main>
		<aside role="complementary" class="page-sidebar col-12 col-lg-4 offset-lg-1 col-xl-3">
			<?php get_template_part( 'spm-layouts/layout', 'secondary' ); ?>
		</aside> 
	</div><!-- #primary -->

<?php get_footer(); ?>
