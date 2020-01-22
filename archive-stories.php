<?php get_header(); ?>
<div class="header-pattern"></div>
<section id="archive" class="back-gradient">

	<header class="stories row">
		<div class="container">
			<div class="col-12">
				<h1 class="white">Success Stories</h1>
			</div>
		</div>
	</header>

		<div class="container padding-30">
			<main id="main" class="site-main row">
				<?php
					$posts_args = array(
						'post_type' => 'stories',
						'posts_per_page' => -1,
					);

					$posts = get_posts( $posts_args );
					
					if( $posts ) :
				?>
				<?php foreach( $posts as $post ): setup_postdata( $post ); ?>
					<div class="story-box col-12 col-md-6">
						<div class="story">
							<?php $video = get_field('video_link'); if( $video ): ?>
								<div class="embed-responsive embed-responsive-16by9">
									<?php the_field('video_link'); ?>
								</div>
							<?php else: ?>
							<a href="<?php the_permalink(); ?>"><?php $alttext = get_the_title(); the_post_thumbnail('stories-feed', ['class' => 'stories-image', 'alt' => $alttext]); ?></a>
							<?php endif; ?>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>">Read Story</a>
						</div>
					</div>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</main><!-- #main -->
		</div>
		<footer></footer>

</section><!-- #archive -->
<?php get_footer(); ?>
