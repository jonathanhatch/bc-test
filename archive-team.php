<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php echo do_shortcode('[searchandfilter id="314"]'); ?>
			<?php $posts = get_posts(array('post_type'	=> 'team')); if( $posts ): ?>
			<?php foreach( $posts as $post ): setup_postdata( $post ); ?>

					<div class="team-member col-12 col-md-4 col-lg-3">
							<a href="<?php the_permalink(); ?>"><?php $alttext = get_the_title(); the_post_thumbnail('team-member', ['class' => 'card-img-top', 'alt' => $alttext]); ?></a>
							<div>
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<p><?php the_sub_field('member_position'); ?></p>
									<p>
											<?php the_field('member_phone'); ?>
											<br><?php the_field('member_email'); ?>
									</p>
							</div>
					</div><!-- .card -->

			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
